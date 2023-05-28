using System.Text;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class DebugText : MonoBehaviour
{
    static DebugText instance;
    [SerializeField] TMP_Text textUi;
    [SerializeField] StringBuilder builder;
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

        builder = new StringBuilder();
    }

    private void Start()
    {
        if (TryGetComponent<TMP_Text>(out textUi))
        {
            builder.Append(textUi.text);
        }
    }

    public static void Log(string text)
    {
        Builder.Append(text).Append("\n");
        TextUi.text = Builder.ToString();
    }
}
