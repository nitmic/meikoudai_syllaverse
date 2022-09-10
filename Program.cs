namespace PhpToXml
{
    public static class Program
    {
        public static string phpDirPath = "";
        public const string streamingAssetsPath = "Assets/StreamingAssets";
        public static string xmlDirPath = Path.Combine(streamingAssetsPath, "xml");

        static void Main(string[] args)
        {
            Console.WriteLine($"{Directory.GetCurrentDirectory()}> ");
            phpDirPath = args[0];

            if (!Directory.Exists(xmlDirPath))
            {
                Directory.CreateDirectory(xmlDirPath);
            }

            if (Directory.Exists(phpDirPath))
            {
                TimeTableCreator.CreateTimeTable();
                TimeTableCreator.Export();
            }
            else
            {
                Console.WriteLine($"Not Exist Syllabus'{phpDirPath}'");
            }
        }

    }
}