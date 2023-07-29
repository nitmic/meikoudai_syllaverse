using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.InputSystem;
using UnityEngine.Animations;
using UnityEngine.UI;

public class ModeToggle : MonoBehaviour
{
    [SerializeField] PlayerInput input;
    [SerializeField] Button toPlayerMode;
    [SerializeField] Button toSphereMode;
    Camera mainCamera;

    // Start is called before the first frame update
    void Start()
    {
        mainCamera = Camera.main;
        input.actions["TogglePlayerMode"].performed += TogglePlayerMode;
        input.actions["ToggleSphereMode"].performed += ToggleSphereMode;
    }

    void TogglePlayerMode(InputAction.CallbackContext callback)
    {
        TogglePlayerMode();
    }
    public void TogglePlayerMode()
    {
        ToggleMode(SyllaverseInput.MapIndex.Player, SyllaverseInput.Marker.Player);
        toPlayerMode.image.enabled = false;
        toSphereMode.image.enabled = true;
    }
    void ToggleSphereMode(InputAction.CallbackContext callback)
    {
        ToggleSphereMode();
    }
    public void ToggleSphereMode()
    {
        ToggleMode(SyllaverseInput.MapIndex.Sphere, SyllaverseInput.Marker.Sphere);
        toSphereMode.image.enabled = false;
        toPlayerMode.image.enabled = true;
    }
    void ToggleMode(int mapIndex, int markerIndex)
    {
        // アクションマップの切り替え
        input.currentActionMap = input.actions.actionMaps[mapIndex];

        // カメラ切り替え
        var sources = new List<ConstraintSource>();
        // カメラの回転を指定のマーカーに追従
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

            // 目標の重みを1に
            ConstraintSource activeSource = sources[markerIndex];
            activeSource.weight = 1;
            sources[markerIndex] = activeSource;

            rotation.SetSources(sources);
            sources.Clear();
        }

        // カメラの位置を指定のマーカーに追従
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

            // 目標の重みを1に
            ConstraintSource activeSource = sources[markerIndex];
            activeSource.weight = 1;
            sources[markerIndex] = activeSource;

            position.SetSources(sources);
            //sources.Clear();
        }

        DebugText.Log($"Toggle end. Map = {input.currentActionMap.name}");
        DebugText.Log($"{sources[0].sourceTransform.name} = {sources[0].weight}, {sources[1].sourceTransform.name} = {sources[1].weight}");
    }

}
