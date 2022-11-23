using UnityEngine;

namespace Suggest
{
    /// <summary>
    /// 曜日の定数定義
    /// </summary>
    public static class Day
    {
        public const int Monday = 0;
        public const int Tuesday = 1;
        public const int Wednesday = 2;
        public const int Thursday = 3;
        public const int Friday = 4;
        public const int Other = 5;
        public const int DAY_MAX = 6;

        public static int ToDay(string s)
        {
            int day;
            switch (s)
            {
                case "月曜":
                    day = Day.Monday;
                    break;
                case "火曜":
                    day = Day.Tuesday;
                    break;
                case "水曜":
                    day = Day.Wednesday;
                    break;
                case "木曜":
                    day = Day.Thursday;
                    break;
                case "金曜":
                    day = Day.Friday;
                    break;
                default:
                    day = Day.Other;
                    break;
            }

            return day;
        }
    }
}