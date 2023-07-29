using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Animations;
using UnityEngine.InputSystem;

public class SphereInputController : MonoBehaviour
{
    public float rotateMultiply = 2;
    public float zoomMultiply = 2;
    [SerializeField] PlayerInput input;
    [SerializeField] Camera mainCamera;

    void Start()
    {
        mainCamera = Camera.main;

        input.actions["Rotate"].performed += _Rotate;
        input.actions["Zoom"].performed += _Zoom;
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
        float magnification = zoomMultiply * callback.ReadValue<float>();
        transform.localScale = Vector3.Lerp(Vector3.one, WorldSize * Vector3.one, (transform.localScale.x + magnification) / WorldSize);

        Debug.Log($"scroll : {callback.ReadValue<float>()}\nmagnification : {magnification}");
    }
}
