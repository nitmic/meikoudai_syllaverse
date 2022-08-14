using System.Text;
using System.Text.RegularExpressions;

namespace PhpToXml
{
    public class TimeTableCreater
    {
        public List<int>[][][] timeTable;

        public Dictionary<int, Subject> Subjects { get; set; }

        static class MatchIndex
        {
            // 科目名の言語
            public const int Japanese = 0;
            public const int English = 1;

            // phpのdivの中身
            public const int DIV_CONTENT = 2;

            // divの番号
            public const int SUBJECT_NAME = 1;
            public const int TIMETABLE_ID = 3;
            public const int SUBJECT_TEACHER = 5;
            public const int TARGET_GRADE_DEPARTMENT = 9;
            public const int CREDITS_NUMBER = 13;
            public const int TIMETABLE = 15;

            // 時間割のマッチ
            public const int TERM = 1;
            public const int DAY = 2;
            public const int START_TIME = 5;
            public const int END_TIME = 6;
        }

        public TimeTableCreater()
        {
            // リスト初期化
            timeTable = new List<int>[Term.HALF_MAX][][];
            for (int i = 0; i < Term.HALF_MAX; i++)
            {
                timeTable[i] = new List<int>[Day.DAY_MAX][];
                for (int j = 0; j < Day.DAY_MAX; j++)
                {
                    timeTable[i][j] = new List<int>[TimeTable.TIME_MAX];
                    for (int k = 0; k < TimeTable.TIME_MAX; k++)
                    {
                        timeTable[i][j][k] = new List<int>();
                    }
                }
            }

            // 科目辞書の初期化
            Subjects = new Dictionary<int, Subject>();
        }

        public void printTimeTable()
        {
            StringBuilder sTableLog = new StringBuilder();
            foreach (List<int>[] row in timeTable[0])
            {
                sTableLog.Append("[");
                foreach (List<int> e in row)
                {
                    sTableLog.Append("(");
                    sTableLog.Append(string.Join(", ", e));
                    sTableLog.Append("), ");
                }
                sTableLog.Append("]\n");
            }
            Console.WriteLine(sTableLog.ToString());
        }

        public void Export()
        {
            TimeTableExporter.Export(timeTable, Program.streamingAssetsPath + "/xml/TimeTable.xml");
            TimeTableExporter.Export(Subjects, Program.streamingAssetsPath + "/xml/Syllabus.xml");
        }

        public void CreateTimeTable()
        {
            // phpのリストをロード
            string[] fileNames = LoadPhpList();

            // 時間割に追加
            PhpToTimeTable(fileNames);

            Console.WriteLine("end");
        }

        /// <summary>
        /// 
        /// </summary>
        /// <returns>phpリスト</returns>
        string[] LoadPhpList()
        {
            string url = Program.streamingAssetsPath + "/download/";
            // Unityエディタ上での処理
            DirectoryInfo dir = new DirectoryInfo(url);
            FileInfo[] info = dir.GetFiles("*.php");
            string[] fName = new string[info.Length];
            for (int i = 0; i < info.Length; i++)
            {
                fName[i] = info[i].Name;
            }
            
            return fName;
        }

        void PhpToTimeTable(string[] fileNames)
        {

            foreach (string f in fileNames)
            {
                //Console.WriteLine(f);

                string filepath = Program.streamingAssetsPath + "/download/" + f;
                Console.WriteLine(filepath);

                string fileContent;
                fileContent = LoadPhpFile(filepath);

                //正規表現パターンとオプションを指定してRegexオブジェクトを作成
                Regex r = new Regex(
                    @"<(div).+?>(.*?)</\1>",
                    RegexOptions.IgnoreCase | RegexOptions.Singleline
                );
                //TextBox1.Text内で正規表現と一致する対象をすべて検索
                MatchCollection mc = r.Matches(fileContent);
                Console.WriteLine($"( {mc.Count} )");

                // 科目のデータを抽出
                Subject subject = ExtractSubject(f, mc);
                Subjects.Add(subject.id, subject);

                for (int i = subject.startTime - 1; i < subject.endTime; i++)
                {
                    timeTable[subject.half][subject.day][i].Add(subject.id);
                }
            }
        }

        string LoadPhpFile(string filePath)
        {
            string fileContent;
            fileContent = File.ReadAllText(filePath);

            return fileContent;
        }

        /// <summary>
        /// 科目の情報を抽出する
        /// </summary>
        /// <param name="fileName">phpファイルの名前</param>
        /// <param name="matchCollection">正規表現の結果</param>
        /// <returns>科目インスタンス</returns>
        Subject ExtractSubject(string fileName, MatchCollection matchCollection)
        {
            Subject subject = new Subject();
            subject.id = int.Parse(fileName.Replace(".php", ""));
            subject.name = matchCollection[MatchIndex.SUBJECT_NAME].Groups[MatchIndex.DIV_CONTENT].Value.Replace("&nbsp;", "").Split("<br>")[MatchIndex.Japanese];
            subject.teacher = matchCollection[MatchIndex.SUBJECT_TEACHER].Groups[MatchIndex.DIV_CONTENT].Value.Replace("&nbsp;", "");
            subject.timeTableId = int.Parse(matchCollection[MatchIndex.TIMETABLE_ID].Groups[MatchIndex.DIV_CONTENT].Value);

            // 学科と学年を抽出
            string departmentGrade = matchCollection[MatchIndex.TARGET_GRADE_DEPARTMENT].Groups[MatchIndex.DIV_CONTENT].Value.Replace("&nbsp;", "").Replace("&nbsp", "");
            Regex r = new Regex(@"(.+?)(\d)年次");
            Match match = r.Match(departmentGrade);
            subject.department = match.Groups[1].Value.Replace("<br>", "").Split("<BR> ");
            Console.WriteLine(match.Groups.Count);
            Console.WriteLine(string.Join(", ", match.Groups));
            subject.grade = int.Parse(match.Groups[2].Value);
            // 単位数を抽出
            subject.creditsNumber = int.Parse(matchCollection[MatchIndex.CREDITS_NUMBER].Groups[MatchIndex.DIV_CONTENT].Value);

            // 時間割の位置を抽出
            (subject.half, subject.day, (subject.startTime, subject.endTime)) = ExtractTimeTable(matchCollection);

            // ログに出力
            Console.WriteLine(subject.ToStringLog());

            return subject;
        }

        (int half, int day, (int startTime, int endTime)) ExtractTimeTable(MatchCollection matchCollection)
        {
            string timeTablePosition = matchCollection[MatchIndex.TIMETABLE].Groups[MatchIndex.DIV_CONTENT].Value.Replace("&nbsp;", "");

            Regex r = new Regex(@"(\S+) (.曜|集中)((\d)-(\d)限)?");
            Match match = r.Match(timeTablePosition);

            // 前期後期
            int half = Term.ToTerm(match.Groups[MatchIndex.TERM].Value);
            if (half == Term.Other)
            {
                Console.WriteLine($"{match.Value}[1] = {match.Groups[MatchIndex.TERM].Value}");
            }
            // 曜日
            int day = Day.ToDay(match.Groups[MatchIndex.DAY].Value);
            if (day == Day.Other)
            {
                Console.WriteLine($"{match.Value}[2] = {match.Groups[MatchIndex.DAY].Value}");
            }
            // 時間
            int startTime, endTime;
            try
            {
                startTime = int.Parse(match.Groups[MatchIndex.START_TIME].Value);
                endTime = int.Parse(match.Groups[MatchIndex.END_TIME].Value);
            }
            catch (System.FormatException)
            {
                startTime = TimeTable.TIME_OTHER;
                endTime = TimeTable.TIME_OTHER;
                Console.WriteLine($"{match.Groups[MatchIndex.START_TIME].Value}-{match.Groups[MatchIndex.END_TIME].Value}");
            }

            return (half, day, (startTime, endTime));
        }
    }
}


