using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using Suggest;

namespace TimetableDraw
{
    public class DrawSelectSuggestUI : MonoBehaviour
    {
        public Canvas[] canvasDay = new Canvas[Day.DAY_MAX - 1];
        public Transform[] scrollContents = new Transform[Day.DAY_MAX - 1];
        public GameObject subjectUi;
        [SerializeField] Suggester suggester;
        [SerializeField] DrawTimeTable drawTimeTable;

        public void Draw()
        {
            for (int day = 0; day < Day.DAY_MAX - 1; day++)
            {
                foreach (Subject s in suggester.suggestTimeTable[day])
                {
                    GameObject go = Instantiate(subjectUi, scrollContents[day].transform);
                    var sss = go.GetComponent<SelectSuggestSubject>();
                    sss.Lecture = s;
                    sss.canvas = canvasDay[day];
                    sss.drawTimeTable = drawTimeTable;
                }

                // デバッグ
                //break;
            }
        }

    }
}

