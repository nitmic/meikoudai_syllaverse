using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Animations;
using UnityEngine.InputSystem;

public class SphereInputController : MonoBehaviour
{
    public float rotateMultiply = 2;
    public float zoomMultiply = 2;
    public float scrollClamp = 10;
    [SerializeField] PlayerInput input;
    [SerializeField] Camera mainCamera;

    void Start()
    {
        mainCamera = Camera.main;

        input.actions["Rotate"].performed += _Rotate;
        input.actions["Zoom"].performed += _Zoom;
        input.actions["TogglePlayerMode"].started += _ToggleMode;
    }

    void _Rotate(InputAction.CallbackContext callback)
    {
        Vector2 delta = callback.ReadValue<Vector2>();
        // Debug.Log($"Look : delta = {delta}");

        // 視点移動
        // 軸 (ポインタ移動方向と前方方向の外積)
        Vector3 delta3D = transform.TransformVector(delta.x, delta.y, 0);
        Vector3 rotateAxis = Vector3.Cross(delta3D, transform.forward).normalized;
        // 角度
        float angle = -rotateMultiply * delta.magnitude * (180 - mainCamera.fieldOfView) / Screen.width;

        transform.Rotate(rotateAxis, angle, Space.World);
    }
    void _Zoom(InputAction.CallbackContext callback)
    {
        const float WorldSize = 1000f;
        // 拡大率
        float magnification = zoomMultiply * scrollClamp * Mathf.Clamp01(callback.ReadValue<float>() / scrollClamp);
        transform.localScale = Vector3.Lerp(Vector3.one, WorldSize * Vector3.one, (transform.localScale.x + magnification) / WorldSize);

        Debug.Log($"scroll : {callback.ReadValue<float>()}\nmagnification : {magnification}");
    }
    void _ToggleMode(InputAction.CallbackContext callback)
    {
        input.currentActionMap = input.actions.actionMaps[SyllaverseInput.MapIndex.Player];

        // カメラ切り替え
        var sources = new List<ConstraintSource>();
        // カメラの回転をPlayerマーカーに追従
        RotationConstraint rotation;
        if (mainCamera.TryGetComponent(out rotation))
        {
            rotation.GetSources(sources);
            // 全ての重みを0に
            for (int i = 0; i < sources.Count; i++)
            {
                ConstraintSource item = sources[i];
                item.weight = 0;
                sources[i] = item;
            }

            // Playerの重みを1に
            ConstraintSource player = sources[SyllaverseInput.Marker.Player];
            player.weight = 1;
            sources[SyllaverseInput.Marker.Player] = player;

            rotation.SetSources(sources);
            sources.Clear();
        }

        // カメラの位置をSphereマーカーに追従
        PositionConstraint position;
        if (mainCamera.TryGetComponent(out position))
        {
            position.GetSources(sources);
            // 全ての重みを0に
            for (int i = 0; i < sources.Count; i++)
            {
                ConstraintSource item = sources[i];
                item.weight = 0;
                sources[i] = item;
            }

            // Sphereの重みを1に
            ConstraintSource player = sources[SyllaverseInput.Marker.Player];
            player.weight = 1;
            sources[SyllaverseInput.Marker.Player] = player;

            position.SetSources(sources);
            sources.Clear();
        }
    }
}
