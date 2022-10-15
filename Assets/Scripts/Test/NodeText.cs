using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class NodeText : MonoBehaviour
{
    public TextMeshProUGUI Text;
    public GameObject Target;

    public void SetText(string text){
        Text.text = text;
    }

    public void Start(){
        Target = Camera.main.gameObject;
    }

    public void Update(){
        // this.transform.LookAt(Target.transform.position);
    }
}
