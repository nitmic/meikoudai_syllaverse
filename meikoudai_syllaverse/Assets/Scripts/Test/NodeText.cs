using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Animations;
using TMPro;

[RequireComponent(typeof(RotationConstraint))]
public class NodeText : MonoBehaviour
{
    public TMP_Text Text;
    public GameObject Target;
    [SerializeField] RotationConstraint constraint;

    public void SetText(string text)
    {
        Text.text = text;
    }

    public void Start()
    {
        // 常にカメラを向く
        if (TryGetComponent<RotationConstraint>(out constraint))
        {
            ConstraintSource source = new ConstraintSource();
            source.sourceTransform = Camera.main.transform;
            source.weight = 1f;

            constraint.AddSource(source);
        }
    }
}
