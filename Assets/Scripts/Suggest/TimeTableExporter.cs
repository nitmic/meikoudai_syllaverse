using System.Collections;
using System.Collections.Generic;
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
        private static Dictionary<int, Subject> syllabus;
        public static IReadOnlyDictionary<int, Subject> Syllabus { get => syllabus; }
        private static List<int>[][][] timetable;
        public static IReadOnlyList<int>[][][] Timetable { get => timetable; }
        private static List<Subject> syllabusList;

        /// <summary>
        /// メンバアクセス前に実行
        /// Syllabus, Timetableメンバの初期化（ロード）を行う。
        /// </summary>
        public static IEnumerator Import()
        {
            if (timetable is not null)
            {
                yield break;
            }

            yield return Import<List<Subject>>(UnityEngine.Application.streamingAssetsPath + "/xml/Syllabus.xml", (result)=>syllabusList = result);
            yield return Import<List<int>[][][]>(UnityEngine.Application.streamingAssetsPath + "/xml/TimeTable.xml", (result)=>timetable = result);

            syllabus = new Dictionary<int, Subject>();
            foreach (Subject item in syllabusList)
            {
                syllabus[item.id] = item;
            }
            syllabusList = default;

            yield break;
        }

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
        static IEnumerator Import<T>(string xmlPath, UnityAction<T> callback)
        {
            T result;
            DataContractSerializer deserializer = new DataContractSerializer(typeof(T));

#if UNITY_EDITOR


            using (FileStream stream = new FileStream(xmlPath, FileMode.Open))
            {
                result = (T)deserializer.ReadObject(stream);
            }
#else
            UnityWebRequest request = UnityWebRequest.Get(xmlPath);
            yield return request.SendWebRequest();

            byte[] data = request.downloadHandler.data;
            using (MemoryStream memory = new MemoryStream(data))
            {
                result = (T)deserializer.ReadObject(memory);
            }
#endif

            callback(result);

            yield break;
        }

        
        public static IEnumerator DebugImport<T>(string xmlPath, UnityAction<T> callback, TextMeshProUGUI ugui)
        {
            ugui.text += "1";
            T result;
            DataContractSerializer deserializer = new DataContractSerializer(typeof(T));
            ugui.text += "2";

            yield return null;
#if UNITY_EDITOR


            using (FileStream stream = new FileStream(xmlPath, FileMode.Open))
            {
                result = (T)deserializer.ReadObject(stream);
            }
#else
            UnityWebRequest request = UnityWebRequest.Get(xmlPath);
            yield return request.SendWebRequest();
            // 通信エラー
            if (request.result != UnityWebRequest.Result.Success)
            {
                ugui.text += "\n" + request.error;
                yield break;
            }
            ugui.text += "3";
            yield return null;
            byte[] data = request.downloadHandler.data;
            using (MemoryStream memory = new MemoryStream(data))
            {
                ugui.text += "4";
                yield return null;
                result = (T)deserializer.ReadObject(memory);
            }
            ugui.text += "5";
#endif

            callback(result);

            yield break;
        }

        
    }
}
