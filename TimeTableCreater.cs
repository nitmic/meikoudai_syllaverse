using System.Text;
using System.Text.RegularExpressions;

namespace PhpToXml
{
    public static class TimeTableCreator
    {
        public static List<int>[][][] timeTable;

        public static List<Subject> Syllabus { get; set; }

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
            public const int START_TIME = 4;
            public const int END_TIME = 5;
        }

        static TimeTableCreator()
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
            Syllabus = new List<Subject>();
        }

        public static void printTimeTable()
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

        public static void Export()
        {
            TimeTableExporter.Export(timeTable, Path.Combine(Program.xmlDirPath, "TimeTable.xml"));
            TimeTableExporter.Export(Syllabus, Path.Combine(Program.xmlDirPath, "Syllabus.xml"));
        }

        public static void CreateTimeTable()
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
        static string[] LoadPhpList()
        {
            // Unityエディタ上での処理
            DirectoryInfo dir = new DirectoryInfo(Program.phpDirPath);
            FileInfo[] info = dir.GetFiles("*.php");
            string[] fName = new string[info.Length];
            for (int i = 0; i < info.Length; i++)
            {
                fName[i] = info[i].Name;
            }
            
            return fName;
        }

        static void PhpToTimeTable(string[] fileNames)
        {

            foreach (string f in fileNames)
            {
                //Console.WriteLine(f);

                string filepath = Path.Combine(Program.phpDirPath, f);
                //Console.WriteLine(filepath);

                string fileContent;
                fileContent = LoadPhpFile(filepath);

                //正規表現パターンとオプションを指定してRegexオブジェクトを作成
                Regex r = new Regex(
                    @"<(div).+?>(.*?)</\1>",
                    RegexOptions.IgnoreCase | RegexOptions.Singleline
                );
                //TextBox1.Text内で正規表現と一致する対象をすべて検索
                MatchCollection mc = r.Matches(fileContent);
                //Console.WriteLine($"( {mc.Count} )");

                // 科目のデータを抽出
                Subject subject = ExtractSubject(f, mc);
                Syllabus.Add(subject);

                for (int i = subject.startTime; i <= subject.endTime; i++)
                {
                    timeTable[subject.half][subject.day][i].Add(subject.id);
                }
            }
        }

        /// <summary>
        /// ファイル名からファイルの中身を読み込み
        /// </summary>
        /// <param name="filePath">ファイルパス</param>
        /// <returns>ファイルの中身</returns>
        static string LoadPhpFile(string filePath)
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
        static Subject ExtractSubject(string fileName, MatchCollection matchCollection)
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
            // log
            StringBuilder log = new StringBuilder("match.Group = [");
            for (int i = 0; i < match.Groups.Count; i++)
            {
                log.Append("'").Append(match.Groups[i].Value).Append("', ");
            }
            log.Append("]");
            Console.WriteLine(log.ToString());
            
            subject.grade = int.Parse(match.Groups[2].Value);
            // 単位数を抽出
            subject.creditsNumber = int.Parse(matchCollection[MatchIndex.CREDITS_NUMBER].Groups[MatchIndex.DIV_CONTENT].Value);

            // 時間割の位置を抽出
            (subject.half, subject.day, (subject.startTime, subject.endTime)) = ExtractTimeTable(matchCollection);

            // ログに出力
            Console.WriteLine(subject.ToStringLog());

            return subject;
        }

        static (int half, int day, (int startTime, int endTime)) ExtractTimeTable(MatchCollection matchCollection)
        {
            string timeTablePosition = matchCollection[MatchIndex.TIMETABLE].Groups[MatchIndex.DIV_CONTENT].Value.Replace("&nbsp;", "");

            Regex r = new Regex(@"(\S+) (.曜|集中)((\d+)-(\d+)限)?");
            Match match = r.Match(timeTablePosition);

            bool logFlag = false;

            // 前期後期
            int half = Term.ToTerm(match.Groups[MatchIndex.TERM].Value);
            if (half == Term.Other)
            {
                logFlag = true;
            }
            // 曜日
            int day = Day.ToDay(match.Groups[MatchIndex.DAY].Value);
            if (day == Day.Other)
            {
                logFlag = true;
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
                logFlag = true;
            }

            // エラーログ
            if(logFlag)
            {
                StringBuilder log = new StringBuilder("match.Groups = [");
                for (int i = 0; i < match.Groups.Count; i++)
                {
                    log.Append("'").Append(match.Groups[i]).Append("', ");
                }
                log.Append("]");
                Console.WriteLine(log.ToString());
            }

            return (half, day, (startTime, endTime));
        }
    }
}


