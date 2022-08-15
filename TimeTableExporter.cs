using System.Runtime.Serialization;
using System.IO;

namespace PhpToXml
{
    public static class TimeTableExporter
    {
        public static void Export<T>(T data, string filePath)
        {
            string? directoryPath = Path.GetDirectoryName(filePath);
            if (Directory.Exists(directoryPath))
            {
                Directory.CreateDirectory(directoryPath);
            }

            using (FileStream stream = new FileStream(filePath, FileMode.Create))
            {
                DataContractSerializer serializer = new DataContractSerializer(typeof(T));
                serializer.WriteObject(stream, data);
            }
        }

        public static T? Import<T>(string xmlPath)
        {
            T? result;
            using (FileStream stream = new FileStream(xmlPath, FileMode.Open))
            {
                DataContractSerializer deserializer = new DataContractSerializer(typeof(T));
                result = (T?)deserializer.ReadObject(stream);
            }
            return result;
        }
    }
}
