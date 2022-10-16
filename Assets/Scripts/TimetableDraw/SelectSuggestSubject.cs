using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;
using Suggest;

namespace TimetableDraw
{
    public class SelectSuggestSubject : MonoBehaviour
    {
        public Canvas canvas;
        public DrawTimeTable drawTimeTable;
        Subject lecture;
        [Header("SerializeField")]
        [SerializeField] TMP_Text timetableId;
        [SerializeField] TMP_Text subjectName;
        [SerializeField] TMP_Text timetableDay;
        [SerializeField] TMP_Text timetable;
        [Header("デバッグ用")]
        [SerializeField] int startTime;
        [SerializeField] int endTime;

        public Subject Lecture
        {
            get { return lecture; }
            set
            {
                lecture = value;
                TimetableId = value.timeTableId;
                SubjectName = value.name;
                TimetableDay = value.day;
                StartTime = value.startTime;
                EndTime = value.endTime;
            }
        }
        public int TimetableId { set => timetableId.text = value.ToString(); }
        public string SubjectName { set => subjectName.text = value; }
        public int TimetableDay
        {
            set
            {
                switch (value)
                {
                    case Day.Monday:
                        timetableDay.text = "月";
                        break;
                    case Day.Tuesday:
                        timetableDay.text = "火";
                        break;
                    case Day.Wednesday:
                        timetableDay.text = "水";
                        break;
                    case Day.Thursday:
                        timetableDay.text = "木";
                        break;
                    case Day.Friday:
                        timetableDay.text = "金";
                        break;
                    default:
                        timetableDay.text = "";
                        break;
                }
            }
        }
        public int StartTime
        {
            set
            {
                startTime = value;
                timetable.text = $"{startTime}-{endTime}限";
            }
        }
        public int EndTime
        {
            set
            {
                endTime = value;
                timetable.text = $"{startTime}-{endTime}限";
            }
        }

        public void Add()
        {
            drawTimeTable.AddSubjectToTimetable(Lecture);
        }
        public void CanvasDisable()
        {
            canvas.enabled = false;
        }
    }
}
