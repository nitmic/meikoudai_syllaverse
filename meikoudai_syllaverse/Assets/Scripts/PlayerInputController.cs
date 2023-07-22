using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Animations;
using UnityEngine.InputSystem;

/// <summary>
/// プレイヤの入力関連
/// </summary>
[RequireComponent(typeof(Rigidbody))]
public class PlayerInputController : MonoBehaviour
{
    /// <summary>速度</summary>
    public float speed = 50f;
    [Range(0, 1), SerializeField] float decaySpeed = 0.5f;
    public float DecayRate { get => decaySpeed * Time.deltaTime; }
    const float initJumpDistance = 1f;
    [SerializeField] float jumpDistance = initJumpDistance;
    /// <summary>
    /// テキストノード用のレイヤー
    /// </summary>
    [SerializeField] PlayerInput input;
    [SerializeField] Camera mainCamera;
    [Header("デバッグ用")]
    [SerializeField] new Rigidbody rigidbody;
    /// <summary>
    /// カーソル位置
    /// </summary>
    [SerializeField] Vector2 cursorPosition;
    [SerializeField] Vector3 localMoveDir;
    /// <summary>
    /// started時にhitしたCollider
    /// </summary>
    private Vector3 Velocity
    {
        get => transform.localToWorldMatrix * localMoveDir.normalized * speed;
    }
    /// <summary>
    /// XZ平面の移動方向
    /// </summary>
    private Vector2 HorizontalDir
    {
        get => new Vector2(localMoveDir.x, localMoveDir.z);
        set
        {
            localMoveDir.x = value.x;
            localMoveDir.z = value.y;
        }
    }

    private float VerticalDir
    {
        get => localMoveDir.y;
        set => localMoveDir.y = value;
    }

    // Start is called before the first frame update
    void Start()
    {
        cursorPosition = new Vector2(Screen.width / 2, Screen.height / 2);

        //input = GetComponent<PlayerInput>();
        rigidbody = GetComponent<Rigidbody>();
        mainCamera = Camera.main;

        input.actions["Move"].performed += _OnMove;
        input.actions["Move"].canceled += Stop;
        input.actions["Move Pinch"].performed += _OnMove;
        input.actions["Lift"].performed += _OnLift;
        input.actions["Lift"].canceled += _StopLift;
        input.actions["Look"].performed += _OnLook;
        input.actions["Jump"].performed += _Jump;

        StartCoroutine(DecayJump());
    }

    private void _OnMove(InputAction.CallbackContext callback)
    {
        HorizontalDir = callback.ReadValue<Vector2>();
        Debug.Log($"Move : dir = {HorizontalDir}");

        rigidbody.velocity = Velocity;
    }
    private void Stop(InputAction.CallbackContext callback)
    {
        HorizontalDir = Vector2.zero;

        rigidbody.velocity = Velocity;
    }

    /// <summary>
    /// タッチスクリーンによるピンチインの移動
    /// </summary>
    private void _OnMovePinch(InputAction.CallbackContext callback)
    {
        float pinchDelta = callback.ReadValue<float>();
        rigidbody.position += pinchDelta * transform.forward;
    }

    /// <summary>
    /// 上下移動
    /// </summary>
    /// <param name="callback"></param>
    private void _OnLift(InputAction.CallbackContext callback)
    {
        VerticalDir = callback.ReadValue<float>();

        rigidbody.velocity = Velocity;
    }
    /// <summary>
    /// 上下移動入力の停止
    /// </summary>
    /// <param name="callback"></param>
    private void _StopLift(InputAction.CallbackContext callback)
    {
        VerticalDir = 0f;

        rigidbody.velocity = Velocity;
    }

    /// <summary>
    /// 視点移動
    /// </summary>
    /// <param name="callback"></param>
    private void _OnLook(InputAction.CallbackContext callback)
    {
        const float Multiply = 0.5f;
        Vector2 delta = callback.ReadValue<Vector2>();
        // Debug.Log($"Look : delta = {delta}");

        // 視点移動
        Vector3 rotate = rigidbody.rotation.eulerAngles;
        // -90 ~ 270 の範囲で mod 360
        rotate.x = (rotate.x + 90) % 360 - 90;
        // 視点が一回転しないよう制限
        rotate.x = Mathf.Clamp(rotate.x - Multiply * delta.y, -89.9f, 89.9f);
        rotate.y += Multiply * delta.x;

        rigidbody.rotation = Quaternion.Euler(rotate);

        // 移動方向の更新
        rigidbody.velocity = Velocity;
    }
    /// <summary>
    /// 瞬間移動 (スマホの主な移動)
    /// </summary>
    /// <param name="callback"></param>
    private void _Jump(InputAction.CallbackContext callback)
    {
        Ray screenRay = mainCamera.ScreenPointToRay(cursorPosition);
        rigidbody.position += jumpDistance * screenRay.direction;
        jumpDistance *= 1.2f;
        Debug.DrawRay(screenRay.origin, screenRay.direction * jumpDistance, Color.green, 3);
    }

    /// <summary>
    /// 瞬間移動の距離を減衰
    /// 連続で移動すると距離が延びる
    /// </summary>
    IEnumerator DecayJump()
    {
        while (true)
        {
            jumpDistance = Mathf.Lerp(jumpDistance, initJumpDistance, this.DecayRate);

            yield return null;
        }
    }
}
