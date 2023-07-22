using System.Text;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class DebugText : MonoBehaviour
{
    static DebugText instance;
    [SerializeField] TMP_Text textUi;
    [SerializeField] StringBuilder builder = new StringBuilder();
    public static DebugText Instance { get => instance; }
    static TMP_Text TextUi { get => instance.textUi; }
    static StringBuilder Builder { get => instance.builder; }

    private void Awake()
    {
        if (instance is null)
        {
            instance = this;
        }
        else
        {
            Destroy(this);
        }
        
        if (!TryGetComponent<TMP_Text>(out textUi))
        {
            textUi = gameObject.AddComponent<TMP_Text>();
        }
    }

    private void Start()
    {
        builder.Append(textUi.text);
    }

    public static void Log(string text)
    {
        Builder.Append(text).Append("\n");
        TextUi.text = Builder.ToString();
    }
}
