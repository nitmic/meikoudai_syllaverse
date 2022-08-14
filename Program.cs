using System.IO;

namespace PhpToXml
{
    public class Program
    {
        public const string streamingAssetsPath = "Assets/StreamingAssets";

        static void Main(string[] args)
        {
            Console.WriteLine($"{Directory.GetCurrentDirectory()}> ");

            if (Directory.Exists(streamingAssetsPath))
            {
                TimeTableCreater creater = new TimeTableCreater();
                creater.CreateTimeTable();
                creater.Export();
            }
        }

    }
}