using System.Linq;
using System.Collections.Generic;
using UnityEngine;
using Suggest;
using Cysharp.Threading.Tasks;
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
        GenerateCoroutine().Forget();
    }

    async UniTask GenerateCoroutine()
    {
        debugText.text = "Now Loading ... (0%)";

        // XMLをロード
        try
        {
            await TimeTableExporter.Import();
        }
        catch (System.Exception e)
        {
            // 例外の時はUIに表示
            debugText.text += "\n" + e.ToString();
            throw e;
        }

        debugText.text = "Now Loading ... (25%)";
        await UniTask.Yield();

        for (int i = 0; i < 8; i++)
        {
            halfSubjects[i] = new HalfSubjects();
        }
        // 

        debugText.text = "Now Loading ... (50%)";
        await UniTask.Yield();

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
        await UniTask.Yield();


        // テキストの配置
        // Selectでイテレータiを取得
        foreach ((int i, int key, Subject sub) in Subjects.Select((item, index) => (index, item.Key, item.Value)))
        {
            Vector3 position = Vector3.Scale(TimeTableExporter.SyllabusFeature[key], worldSize);

            // ゲームオブジェクトの生成
            GameObject go = Instantiate(prefab, position, Quaternion.identity);
            go.name = $"{sub.name}({key})";

            // NodeTextコンポーネントの初期化
            NodeText nodeText = go.GetComponent<NodeText>();
            nodeText.Text = sub.name;
            nodeText.subjectId = sub.id;

            // 1フレームごとにSTEPの数だけ生成
            const int STEP = 10;
            if (i % STEP == 0)
            {
                debugText.text = $"Now Loading ... ({(int)Mathf.Lerp(75, 100, (float)i / Subjects.Count)}%)";
                await UniTask.Yield();
            }
        }

        debugText.text = "";
    }
}

