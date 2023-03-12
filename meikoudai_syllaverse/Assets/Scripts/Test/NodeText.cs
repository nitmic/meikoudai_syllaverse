using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Animations;
using TMPro;

[RequireComponent(typeof(LookAtConstraint))]
public class NodeText : MonoBehaviour
{
    public TMP_Text Text;
    public GameObject Target;
    [SerializeField] LookAtConstraint constraint;

    public void SetText(string text)
    {
        Text.text = text;
    }

    public void Start()
    {
        // 常にカメラを向く
        if (TryGetComponent<LookAtConstraint>(out constraint))
        {
            ConstraintSource source = new ConstraintSource();
            source.sourceTransform = Camera.main.transform;
            source.weight = 1f;

            constraint.AddSource(source);
            constraint.rotationOffset = new Vector3(0, 180, 0);
        }
    }
}
