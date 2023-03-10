using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Runtime.Serialization;
using System.Globalization;
using UnityEngine;
using UnityEngine.Networking;
using UnityEngine.Events;
using CsvHelper;

using TMPro;

namespace Suggest
{
    public static class TimeTableExporter
    {
        public static readonly string syllabusPath = Application.streamingAssetsPath + "/xml/Syllabus.xml";
        private static Dictionary<int, Subject> syllabus;
        public static IReadOnlyDictionary<int, Subject> Syllabus { get => syllabus; }
        public static readonly string featurePath = Application.streamingAssetsPath + "/csv/Feature.csv";
        private static Dictionary<int, Vector3> syllabusFeature;
        public static IReadOnlyDictionary<int, Vector3> SyllabusFeature { get => syllabusFeature; }
        public static readonly string timetablePath = Application.streamingAssetsPath + "/xml/TimeTable.xml";
        private static List<int>[][][] timetable;
        public static IReadOnlyList<int>[][][] Timetable { get => timetable; }

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

            List<Subject> syllabusList = default;

            var task1 = ImportXML<List<Subject>>(syllabusPath, (result) => syllabusList = result);
            var task2 = ImportXML<List<int>[][][]>(timetablePath, (result) => timetable = result);
            var task3 = ImportFeature();

            yield return task1;
            yield return task2;
            yield return task3;

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
        static IEnumerator ImportXML<T>(string xmlPath, UnityAction<T> callback)
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


        static IEnumerator ImportFeature()
        {
#if UNITY_EDITOR
            var reader = new StreamReader(featurePath);
#else
            // csvの取得
            UnityWebRequest request = UnityWebRequest.Get(featurePath);
            yield return request.SendWebRequest();

            // TextReaderの生成
            string data = request.downloadHandler.text;
            var reader = new StringReader(data);
#endif

            syllabusFeature = new Dictionary<int, Vector3>();
            using (reader)
            {
                using (var csv = new CsvReader(reader, CultureInfo.CurrentCulture))
                {
                    foreach (FeatureRecord line in csv.GetRecords<FeatureRecord>())
                    {
                        // idと位置を対応させる
                        syllabusFeature.Add(line.id, line.position);
                    }
                }
            }
            yield break;
        }
    }
}
