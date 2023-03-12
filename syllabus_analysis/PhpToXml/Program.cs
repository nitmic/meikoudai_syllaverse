namespace PhpToXml
{
    public static class Program
    {
        public static string phpDirPath = "";
        public static string xmlDirPath = "";

        static void Main(string[] args)
        {
            Console.WriteLine($"{Directory.GetCurrentDirectory()}> ");
            phpDirPath = args[0];
            xmlDirPath = args[1];

            if (!Directory.Exists(xmlDirPath))
            {
                Directory.CreateDirectory(xmlDirPath);
            }

            if (Directory.Exists(phpDirPath))
            {
                TimeTableCreator.CreateTimeTable(Program.phpDirPath);
                TimeTableCreator.Export(Program.xmlDirPath);
            }
            else
            {
                Console.WriteLine($"Not Exist Syllabus'{phpDirPath}'");
            }
        }

    }
}