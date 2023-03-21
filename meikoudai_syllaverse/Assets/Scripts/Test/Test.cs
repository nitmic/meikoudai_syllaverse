using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Suggest;

using TMPro;

public class Test : MonoBehaviour
{
    public GameObject prefab;
    public Vector3 worldSize = new Vector3(500, 500, 500);

    IReadOnlyDictionary<int, Subject> Subjects { get => TimeTableExporter.Syllabus; }
    HalfSubjects[] halfSubjects = new HalfSubjects[8];

    public TextMeshProUGUI debugText;

    void Start()
    {
        StartCoroutine(GenerateCoroutine());
    }

    IEnumerator GenerateCoroutine()
    {
        debugText.text = "Now Loading ... (0%)";

        // XMLをロード
        //yield return TimeTableExporter.Import(debugText);
        yield return TimeTableExporter.Import();

        debugText.text = "Now Loading ... (25%)";
        yield return null;

        for (int i = 0; i < 8; i++)
        {
            halfSubjects[i] = new HalfSubjects();
        }
        // 

        debugText.text = "Now Loading ... (50%)";
        yield return null;

        foreach (KeyValuePair<int, Subject> item in Subjects)
        {
            int index = (item.Value.grade - 1) * 2 + item.Value.half;
            if (index >= 8) continue;
            switch (item.Value.department[0])
            {
                case "工学部第一部  生命・応用化学科":
                    halfSubjects[index].LC.Add(item.Value);
                    break;
                case "工学部第一部  物理工学科":
                    halfSubjects[index].PE.Add(item.Value);
                    break;
                case "工学部第一部  電気・機械工学科":
                    halfSubjects[index].EM.Add(item.Value);
                    break;
                case "工学部第一部  情報工学科":
                    halfSubjects[index].CS.Add(item.Value);
                    break;
                case "工学部第一部  社会工学科":
                    halfSubjects[index].AC.Add(item.Value);
                    break;
                default:
                    halfSubjects[index].Common.Add(item.Value);
                    break;
            }
            // Debug.Log(item.Key + ":" + item.Value.department[0]);   
        }

        debugText.text = "Now Loading ... (75%)";
        yield return null;


        // テキストの配置
        foreach ((int key, Subject sub) in Subjects)
        {
            Vector3 position = Vector3.Scale(TimeTableExporter.SyllabusFeature[key], worldSize);
            GameObject go = Instantiate(prefab, position, Quaternion.identity);
            go.name = $"{sub.name}({key})";
            go.GetComponent<NodeText>().SetText(sub.name);
        }

        debugText.text = "";
    }
}

