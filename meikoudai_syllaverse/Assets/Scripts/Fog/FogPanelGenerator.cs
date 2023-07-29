using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class FogPanelGenerator : MonoBehaviour
{
    public enum FogType
    {
        Linear, Exponential, ExponentialSquare
    }
    [Tooltip("生成範囲")]
    public float maxDistance = 1000f;
    [Tooltip("1 - Materialのアルファ"), Range(0f, 1f)]
    public float alphaStep = 0.9f;
    [SerializeField] GameObject FogObject;
    public FogType fogType = FogType.ExponentialSquare;
    [Range(1e-4f, 5e-3f)] public float density = 1e-3f;
    [SerializeField] bool reset = false;
    const float ALPHA_EPS = 0.05f;
    // Start is called before the first frame update
    void Start()
    {
        GeneratePanel();
    }

#if DEBUG
    private void Update()
    {
        if (reset)
        {
            GeneratePanel();
            reset = false;
        }
    }
#endif

    public void GeneratePanel()
    {
        GeneratePanel(fogType);
    }
    public void GeneratePanel(FogType type)
    {
        foreach (Transform child in transform)
        {
            Destroy(child.gameObject);
        }

        switch (type)
        {
            case FogType.Linear:
                GeneratePanelLinear();
                break;
            case FogType.Exponential:
                GeneratePanelExp();
                break;
            case FogType.ExponentialSquare:
                GeneratePanelExpSquare();
                break;
            default:
                break;
        }
    }

    void GeneratePanelExpSquare()
    {
        float distance = 0;
        for (int i = 1; distance < maxDistance || ALPHA_EPS < Mathf.Pow(alphaStep, i); i++)
        {
            distance = Mathf.Sqrt(-Mathf.Log(alphaStep) * i) / density;
            GameObject panel = Instantiate(FogObject, transform);
            panel.transform.localPosition = distance * Vector3.forward;
            panel.transform.localRotation = Quaternion.identity;
        }
    }
    void GeneratePanelExp()
    {
        float distance = 0;
        for (int i = 1; distance < maxDistance || ALPHA_EPS < Mathf.Pow(alphaStep, i); i++)
        {
            distance = -Mathf.Log(alphaStep) * i / density;
            GameObject panel = Instantiate(FogObject, transform);
            panel.transform.localPosition = distance * Vector3.forward;
            panel.transform.localRotation = Quaternion.identity;
        }
    }
    void GeneratePanelLinear()
    {
        float distance = 0;
        for (int i = 1; distance < maxDistance || ALPHA_EPS < Mathf.Pow(alphaStep, i); i++)
        {
            distance = (1 - Mathf.Pow(alphaStep, i)) / density;
            GameObject panel = Instantiate(FogObject, transform);
            panel.transform.localPosition = distance * Vector3.forward;
            panel.transform.localRotation = Quaternion.identity;
        }
    }
}
