using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.InputSystem;

/// <summary>
/// プレイヤの入力関連
/// </summary>
[RequireComponent(typeof(PlayerInput), typeof(Rigidbody))]
public class PlayerInputController : MonoBehaviour
{
    /// <summary>速度</summary>
    public float speed = 10f;
    [Range(0, 1), SerializeField] float decaySpeed = 0.5f;
    public float DecayRate { get => decaySpeed * Time.deltaTime; }
    const float initJumpDistance = 1f;
    [SerializeField] float jumpDistance = initJumpDistance;
    [SerializeField] PlayerInput input;
    [SerializeField] new Rigidbody rigidbody;
    [SerializeField] Vector2 cursorPosition;
    [SerializeField] Vector3 localMoveDir;
    private Vector3 Velocity
    {
        get => transform.localToWorldMatrix * localMoveDir * speed;
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

        input = GetComponent<PlayerInput>();
        rigidbody = GetComponent<Rigidbody>();

        input.actions["Move"].performed += _OnMove;
        input.actions["Move"].canceled += Stop;
        input.actions["Lift"].performed += _OnLift;
        input.actions["Lift"].canceled += _StopLift;
        input.actions["Look"].performed += _OnLook;
        input.actions["Fire"].canceled += _Jump;
        input.actions["Cursor"].performed += _Cursor;

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
        Vector2 delta = callback.ReadValue<Vector2>();
        // Debug.Log($"Look : delta = {delta}");

        // 視点移動
        Vector3 rotate = rigidbody.rotation.eulerAngles;
        rotate.x = (rotate.x + 90) % 360 - 90;
        rotate.x = Mathf.Clamp(rotate.x - 0.5f * delta.y, -89.9f, 89.9f);
        rotate.y += 0.5f * delta.x;

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
        Ray screenRay = Camera.main.ScreenPointToRay(cursorPosition);
        rigidbody.position += jumpDistance * screenRay.direction;
        jumpDistance *= 1.2f;
        Debug.DrawRay(Camera.main.transform.position, Camera.main.transform.forward, Color.blue, 5);
        Debug.DrawRay(transform.position, screenRay.direction, Color.red, 5);
        Debug.Log($"dir = {screenRay.direction}\nCdir= {Camera.main.transform.forward}\n{cursorPosition}:({Screen.width}, {Screen.height})");
    }
    private void _Cursor(InputAction.CallbackContext callback)
    {
        cursorPosition = callback.ReadValue<Vector2>();
        Debug.Log(cursorPosition);
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
