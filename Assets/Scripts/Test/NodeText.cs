using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class NodeText : MonoBehaviour
{
    public TextMeshProUGUI Text;
    public GameObject Target;
    public Canvas canvas;

    public void SetText(string text)
    {
        Text.text = text;
    }

    public void Start()
    {
        if (TryGetComponent<Canvas>(out canvas))
        {
            canvas.worldCamera = Camera.main;
        }
        Target = Camera.main.gameObject;
    }

    public void Update()
    {
        // this.transform.LookAt(Target.transform.position);
    }
}
