using UnityEngine;
using UnityEngine.InputSystem;

public class SyllabusOpenInputController : MonoBehaviour
{
    /// <summary>
    /// テキストノード用のレイヤー
    /// </summary>
    const int nodeLayer = 6;
    [SerializeField] PlayerInput input;
    [Header("デバッグ用")]
    [SerializeField] Camera mainCamera;
    /// <summary>
    /// カーソル位置
    /// </summary>
    [SerializeField] Vector2 cursorPosition;
    /// <summary>
    /// started時にhitしたCollider
    /// </summary>
    [SerializeField] Collider hitCollider;

    private void Start()
    {

        mainCamera = Camera.main;

        input.actions["Select [P]"].started += _SelectTarget;
        input.actions["Select [S]"].started += _SelectTarget;
        input.actions["Select [P]"].performed += _UpdateCursorPosition;
        input.actions["Select [S]"].performed += _UpdateCursorPosition;
        input.actions["Select [P]"].canceled += _SelectAction;
        input.actions["Select [S]"].canceled += _SelectAction;
    }

    private void _SelectTarget(InputAction.CallbackContext callback)
    {
        cursorPosition = callback.ReadValue<Vector2>();
        Ray screenRay = mainCamera.ScreenPointToRay(cursorPosition);

        // Raycastの結果を保持
        RaycastHit hit;
        if (Physics.Raycast(screenRay, out hit, float.MaxValue, 1 << nodeLayer))
        {
            hitCollider = hit.collider;
        }

        Debug.DrawRay(screenRay.origin, screenRay.direction * 30, Color.red, 5);
        DebugText.Log("Select (started)\n");
        DebugText.Log($"hitCOllider = {hitCollider?.name} \t[origin = {screenRay.origin}, direction = {screenRay.direction}]");
    }
    private void _UpdateCursorPosition(InputAction.CallbackContext callback)
    {
        cursorPosition = callback.ReadValue<Vector2>();
    }
    private void _SelectAction(InputAction.CallbackContext callback)
    {
        Debug.Log("Select canceled");
        Ray screenRay = mainCamera.ScreenPointToRay(cursorPosition);
        Debug.DrawRay(screenRay.origin, screenRay.direction * 30, Color.blue, 5);

        RaycastHit hit;
        if (Physics.Raycast(screenRay, out hit, float.MaxValue, 1 << nodeLayer) && hit.collider == hitCollider)
        {
            NodeText nodeText;
            if (hit.collider.TryGetComponent<NodeText>(out nodeText))
            {
                int subjectId = nodeText.subjectId;
                //input.currentActionMap = input.actions.actionMaps[SyllaverseInput.webviewIndex];
                Application.OpenURL($"{SyllabusURL.viewURL}?id={subjectId}");
                
                Debug.Log($"Open \"{SyllabusURL.viewURL}?id={subjectId}\"");
                DebugText.Log($"Open \"{SyllabusURL.viewURL}?id={subjectId}\"");
            }
        }

        hitCollider = null;
        DebugText.Log("Select (canceled)\n");
    }

}