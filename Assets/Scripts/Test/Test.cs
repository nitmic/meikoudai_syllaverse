using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Suggest;

using TMPro;

public class Test : MonoBehaviour
{
    public GameObject prefab;

    IReadOnlyDictionary<int, Subject> Subjects{ get => TimeTableExporter.Syllabus; }
    HalfSubjects[] halfSubjects = new HalfSubjects[8];

    public TextMeshProUGUI debugText;

    void Start()
    {
        StartCoroutine(Coroutine());
        debugText.text += "D";
        debugText.text += "E";
        debugText.text += "F";

    }

    IEnumerator Coroutine()
    {
        // XMLをロード
        yield return StartCoroutine(LoadXML());

        debugText.text += "A";

        for(int i=0;i<8;i++){
            halfSubjects[i] = new HalfSubjects();
        }
        // 

        debugText.text += "B";

        foreach (KeyValuePair<int ,Subject> item in Subjects)
        {
            int index = (item.Value.grade - 1) * 2 + item.Value.half;
            if(index >= 8)continue;
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

        debugText.text += "C";


        // デバッグ
        for(int i=0;i<8;i++){
            foreach(Subject sub in halfSubjects[i].Common){
                Instantiate(prefab,this.transform.position + Random.insideUnitSphere * 100,Quaternion.identity).GetComponent<NodeText>().SetText(sub.name);
            }

            foreach(Subject sub in halfSubjects[i].CS){
                Instantiate(prefab,this.transform.position + this.transform.forward * 200 + Random.insideUnitSphere * 100,Quaternion.identity).GetComponent<NodeText>().SetText(sub.name);
            }
            this.transform.Rotate(0,72,0);
            foreach(Subject sub in halfSubjects[i].LC){
                Instantiate(prefab,this.transform.position + this.transform.forward * 200 + Random.insideUnitSphere * 100,Quaternion.identity).GetComponent<NodeText>().SetText(sub.name);
            }
            this.transform.Rotate(0,72,0);
            foreach(Subject sub in halfSubjects[i].AC){
                Instantiate(prefab,this.transform.position + this.transform.forward * 200 + Random.insideUnitSphere * 100,Quaternion.identity).GetComponent<NodeText>().SetText(sub.name);
            }
            this.transform.Rotate(0,72,0);
            foreach(Subject sub in halfSubjects[i].PE){
                Instantiate(prefab,this.transform.position + this.transform.forward * 200 + Random.insideUnitSphere * 100,Quaternion.identity).GetComponent<NodeText>().SetText(sub.name);
            }
            this.transform.Rotate(0,72,0);
            foreach(Subject sub in halfSubjects[i].EM){
                Instantiate(prefab,this.transform.position + this.transform.forward * 200 + Random.insideUnitSphere * 100,Quaternion.identity).GetComponent<NodeText>().SetText(sub.name);
            }
            this.transform.Rotate(0,72,0);
            this.transform.Translate(0,30,0);
        }
        

        yield return null;
    }

    void Update()
    {
        
    }

    public IEnumerator LoadXML()
    {
        List<Subject> l;
        
        yield return StartCoroutine(
            TimeTableExporter.DebugImport<List<Subject>>(
                Application.streamingAssetsPath + "/xml/Syllabus.xml",
                (result) => l = result,
                debugText
            )
        );
        
        //yield return StartCoroutine(TimeTableExporter.Import());
    }
    
}

