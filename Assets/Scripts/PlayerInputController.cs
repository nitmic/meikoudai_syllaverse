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
    public float maxSpeed;
    [Range(0, 1)] public float animationSpeed;
    [SerializeField] PlayerInput input;
    [SerializeField] new Rigidbody rigidbody;
    private Coroutine coroutine;
    [SerializeField] Vector3 moveDir;
    Vector2 HorizontalDir
    {
        get => new Vector2(moveDir.x, moveDir.z);
        set
        {
            moveDir.x = value.x;
            moveDir.z = value.y;
        }
    }
    float VerticalDir
    {
        get => moveDir.y;
        set => moveDir.y = value;
    }

    // Start is called before the first frame update
    void Start()
    {
        input = GetComponent<PlayerInput>();
        rigidbody = GetComponent<Rigidbody>();

        input.actions["Move"].performed += _OnMove;
        input.actions["Move"].canceled += Stop;
        input.actions["Lift"].performed += _OnLift;
        input.actions["Lift"].canceled += _StopLift;
        input.actions["Look"].performed += _OnLook;
    }

    private void _OnMove(InputAction.CallbackContext callback)
    {
        HorizontalDir = callback.ReadValue<Vector2>();
        Debug.Log($"Move : dir = {HorizontalDir}");

        StopAllCoroutines();
        this.coroutine = StartCoroutine(MoveAsync(rigidbody, maxSpeed * moveDir));
    }

    private void Stop(InputAction.CallbackContext callback)
    {
        HorizontalDir = Vector2.zero;

        StopAllCoroutines();
        this.coroutine = StartCoroutine(MoveAsync(rigidbody, maxSpeed * moveDir));
    }

    private void _OnLift(InputAction.CallbackContext callback)
    {
        VerticalDir = callback.ReadValue<float>();

        StopAllCoroutines();
        this.coroutine = StartCoroutine(MoveAsync(rigidbody, maxSpeed * moveDir));
    }
    private void _StopLift(InputAction.CallbackContext callback)
    {
        VerticalDir = 0f;

        StopAllCoroutines();
        this.coroutine = StartCoroutine(MoveAsync(rigidbody, maxSpeed * moveDir));
    }

    private void _OnLook(InputAction.CallbackContext callback)
    {
        Vector2 delta = callback.ReadValue<Vector2>();
        Debug.Log($"Look : delta = {delta}");

        Quaternion rotateY = Quaternion.Euler(0, 0.5f * delta.x, 0);
        Quaternion rotateX = Quaternion.Euler(0.5f * delta.y, 0, 0);
        Vector3 rotate = rigidbody.rotation.eulerAngles;
        rotate.x += -0.5f * delta.y;
        rotate.y += 0.5f * delta.x;

        rigidbody.rotation = Quaternion.Euler(rotate);
    }

    IEnumerator MoveAsync(Rigidbody rigidbody, Vector3 localVelocity)
    {
        Debug.Log("Coroutine");

        while (true)
        {
            rigidbody.velocity = Vector3.Lerp(
                rigidbody.velocity,
                (Vector3)(new Matrix4x4(transform.right, Vector3.up, transform.forward, new Vector4(0, 0, 0, 1)) * localVelocity),
                animationSpeed
            );
            Debug.Log($"v = {rigidbody.velocity}");

            yield return null;
        }
    }
}
