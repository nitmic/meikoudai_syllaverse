using System.Collections;
using System.IO;
using System.Runtime.Serialization;
using UnityEngine.Networking;
using UnityEngine.Events;

using TMPro;
using System.Text;

namespace Suggest
{
    public static class TimeTableExporter
    {
        public static void Export<T>(T data, string filePath)
        {
            string directoryPath = Path.GetDirectoryName(filePath);
            if (directoryPath is not null && !Directory.Exists(directoryPath))
            {
                Directory.CreateDirectory(directoryPath);
            }

            using (FileStream stream = new FileStream(filePath, FileMode.Create))
            {
                DataContractSerializer serializer = new DataContractSerializer(typeof(T));
                serializer.WriteObject(stream, data);
            }
        }

        /// <summary>
        /// シリアライズされたXMLをロードする
        /// </summary>
        /// <param name="xmlPath">XMLがあるパス</param>
        /// <param name="callback"><para>結果を受け取るコールバック.</para><para> (result)=>「変数」=result</para></param>
        /// <typeparam name="T">結果の型</typeparam>
        /// <returns></returns>
        public static IEnumerator Import<T>(string xmlPath, UnityAction<T> callback)
        {
            T result;
            
#if UNITY_EDITOR
#else
            UnityWebRequest request = new UnityWebRequest(xmlPath);
            request.downloadHandler = new DownloadHandlerFile(xmlPath); 
            yield return request.SendWebRequest();
#endif

            using (FileStream stream = new FileStream(xmlPath, FileMode.Open))
            {
                DataContractSerializer deserializer = new DataContractSerializer(typeof(T));
                result = (T)deserializer.ReadObject(stream);
            }

            callback(result);

            yield break;
        }


        public static IEnumerator DebugImport<T>(string xmlPath, UnityAction<T> callback,TextMeshProUGUI ugui)
        {
            ugui.text += "1";
            T result;
            ugui.text += "2";
#if UNITY_EDITOR
#else       
            ugui.text += "3";
            UnityWebRequest request = new UnityWebRequest(xmlPath);
            ugui.text += "4";
            request.downloadHandler = new DownloadHandlerFile(xmlPath); 
            ugui.text += "5";
            yield return request.SendWebRequest();
#endif
            ugui.text += "6";
            using (FileStream stream = new FileStream(xmlPath, FileMode.Open))
            {
                ugui.text += "7";
                DataContractSerializer deserializer = new DataContractSerializer(typeof(T));
                
                var reader = new StreamReader(stream, Encoding.UTF8);

                ugui.text += "8";
                // ugui.text += reader.ReadLine();

                result = (T)deserializer.ReadObject(stream);
                
                ugui.text += "9";
                // ugui.text += reader.ReadLine();
            }
            ugui.text += "0";
            callback(result);

            yield break;
        }
    }
}
