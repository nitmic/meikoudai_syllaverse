using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Animations;
using TMPro;

[RequireComponent(typeof(RotationConstraint))]
public class NodeText : MonoBehaviour
{
    public int subjectId;
    public TMP_Text TextUi;
    [SerializeField] RotationConstraint constraint;
    [SerializeField] BoxCollider collider;
    [SerializeField] RectTransform rect;

    public string Text
    {
        get => TextUi.text;
        set => TextUi.text = value;
    }

    public void Start()
    {
        ConstraintSetup();

        SizeSetup();
    }

    void ConstraintSetup()
    {
        // 常にカメラを向く
        ConstraintSource source = new ConstraintSource();
        source.sourceTransform = Camera.main.transform;
        source.weight = 1f;

        constraint.AddSource(source);
    }

    void SizeSetup()
    {
        // 適切なサイズを取得
        Vector2 preferredSize;
        preferredSize.x = TextUi.preferredWidth;
        preferredSize.y = TextUi.preferredHeight;

        // Transformに適応
        if (TryGetComponent<RectTransform>(out rect))
        {
            rect.sizeDelta = preferredSize;
        }

        // Colliderに適応
        collider.size = new Vector3(preferredSize.x, preferredSize.y, 0.1f);
    }
}
