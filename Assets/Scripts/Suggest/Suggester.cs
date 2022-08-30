using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

namespace Suggest
{
    public class Suggester : MonoBehaviour
    {
        /// <summary>
        /// <para>提案する前期後期,クオーター</para>
        /// <para>"Assets\Scripts\Suggest"を参照</para>
        /// </summary>
        [SerializeField] int half;
        /// <summary>
        /// <para>提案する学科</para>
        /// <para>"工学部第一部  生命・応用化学科"など</para>
        /// <para>1文字でも違うと正しく処理されないため注意</para>
        /// </summary>
        [SerializeField] string department;
        [SerializeField] int grade;
        //public string xmlPath;
        /// <summary>
        /// 全体の時間割
        /// </summary>
        public List<int>[][][] timeTable;
        /// <summary>
        /// 提案(対象)科目
        /// </summary>
        public HashSet<Subject>[] suggestTimeTable;
        /// <summary>
        /// 推奨の時間割
        /// 表示する時間割
        /// </summary>
        public HashSet<Subject>[] uiDrawTimeTable;
        /// <summary>
        /// <para>シラバスの情報</para>
        /// <para>phpファイルの番号がキー</para>
        /// </summary>
        private Dictionary<int, Subject> syllabus;
        public IReadOnlyDictionary<int, Subject> Syllabus { get => syllabus; }


        private void Awake()
        {
            // リスト初期化
            uiDrawTimeTable = new HashSet<Subject>[Day.DAY_MAX];
            suggestTimeTable = new HashSet<Subject>[Day.DAY_MAX];
            for (int day = 0; day < Day.DAY_MAX; day++)
            {
                uiDrawTimeTable[day] = new HashSet<Subject>();
                suggestTimeTable[day] = new HashSet<Subject>();
            }

        }

        private IEnumerator Start()
        {
            //department = departmentDropdown.options[departmentDropdown.value].text;
            //grade = gradeDropdown.value;

            // 全体の時間割と辞書のロード
            yield return StartCoroutine(LoadXml());

            yield break;
        }

        public void printTimeTable()
        {
            TimeTablePrinter.printSyllabus(Syllabus);
            TimeTablePrinter.printTimeTable(suggestTimeTable, "suggest TimeTable");
            TimeTablePrinter.printTimeTable(uiDrawTimeTable, "uiDrawTimeTable");
            TimeTablePrinter.printTimeTable(timeTable, "timeTable", Syllabus);
        }

        /// <summary>
        /// XMLファイル一式をロードする
        /// </summary>
        /// <returns></returns>
        public IEnumerator LoadXml()
        {
            Debug.Log("Load start");
            yield return StartCoroutine(
                TimeTableExporter.Import<Dictionary<int, Subject>>(
                    Application.streamingAssetsPath + "/xml/Syllabus.xml",
                    (result) => syllabus = result
                )
            );
            yield return StartCoroutine(
                TimeTableExporter.Import<List<int>[][][]>(
                    Application.streamingAssetsPath + "/xml/TimeTable.xml",
                    (result) => timeTable = result
                )
            );
            Debug.Log("Load end");
        }

        public void CreateSuggest(int half, string department, int grade)
        {
            // 空きコマか
            bool[,] is_empty = new bool[Day.DAY_MAX, TimeTable.TIME_MAX]
                {
                    {true, true, true, true, true, true, true, true, true, true, true, true, true, true, true},
                    {true, true, true, true, true, true, true, true, true, true, true, true, true, true, true},
                    {true, true, true, true, true, true, true, true, true, true, true, true, true, true, true},
                    {true, true, true, true, true, true, true, true, true, true, true, true, true, true, true},
                    {true, true, true, true, true, true, true, true, true, true, true, true, true, true, true},
                    {true, true, true, true, true, true, true, true, true, true, true, true, true, true, true}
                };

            // 全体の時間割から対象科目の時間割を作成
            // 曜日を全走査
            for (int day = 0; day < timeTable[half].Length; day++)
            {
                // 時間を全走査
                for (int j = 0; j < timeTable[half][day].Length; j++)
                {
                    // 科目
                    foreach (int id in timeTable[half][day][j])
                    {
                        // 学年一致
                        if (Syllabus[id].grade == grade)
                        {
                            foreach (string element in Syllabus[id].department)
                            {
                                //Debug.Log($"{element} in {department}");
                                // 対象科目
                                if (department.Contains(element))
                                {
                                    // 時間割に追加
                                    suggestTimeTable[day].Add(Syllabus[id]);

                                    // 始めのコマが空きコマならUI表示用に追加
                                    if(is_empty[day, j])
                                    {
                                        uiDrawTimeTable[day].Add(Syllabus[id]);
                                        for(int i=Syllabus[id].startTime;i<=Syllabus[id].endTime;i++)
                                        {
                                            is_empty[day, i] = false;
                                        }
                                    }
                                    break;
                                }
                            }
                        }
                    }
                }
            }
        }
        public void CreateSuggest()
        {
            CreateSuggest(this.half, this.department, this.grade);
            printTimeTable();
        }

        // 以下UIイベント用
        public void ChangedDepartmentDropdown(TMP_Dropdown dropdown)
        {
            department = dropdown.options[dropdown.value].text;
        }
        public void ChangedGradeDropdown(TMP_Dropdown dropdown)
        {
            grade = dropdown.value;
        }
        public void ChangedHalfDropdown(TMP_Dropdown dropdown)
        {
            half = dropdown.value;
        }
    }
}
