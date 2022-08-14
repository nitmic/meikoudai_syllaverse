using System.Runtime.Serialization;

namespace PhpToXml
{
    public static class TimeTableExporter
    {
        public static void Export<T>(T data, string fileName)
        {
            using (FileStream stream = new FileStream(fileName, FileMode.Create))
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
