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
        public static readonly string featurePath = Application.streamingAssetsPath + "/csv/feature.csv";
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
        }

        public static IEnumerator Import(TextMeshProUGUI ugui)
        {
            if (timetable is not null)
            {
                yield break;
            }

            ugui.text += "\n1";

            List<Subject> syllabusList = default;

            var task1 = ImportXML<List<Subject>>(syllabusPath, (result) => syllabusList = result);
            var task2 = ImportXML<List<int>[][][]>(timetablePath, (result) => timetable = result);
            var task3 = ImportFeature(ugui);

            ugui.text += "2";
            yield return task1;
            ugui.text += "3";
            yield return task2;
            ugui.text += "4";
            yield return task3;
            ugui.text += "5";

            syllabus = new Dictionary<int, Subject>();
            foreach (Subject item in syllabusList)
            {
                syllabus[item.id] = item;
            }
            ugui.text += " end(import)\n";
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

            UnityWebRequest request = UnityWebRequest.Get(xmlPath);
            yield return request.SendWebRequest();

            byte[] data = request.downloadHandler.data;
            using (MemoryStream memory = new MemoryStream(data))
            {
                result = (T)deserializer.ReadObject(memory);
            }

            callback(result);

            yield break;
        }

        static IEnumerator ImportFeature()
        {
            // csvの取得
            UnityWebRequest request = UnityWebRequest.Get(featurePath);
            yield return request.SendWebRequest();

            // TextReaderの生成
            string data = request.downloadHandler.text;
            var reader = new StringReader(data);

            syllabusFeature = new Dictionary<int, Vector3>();
            using (reader)
            {
                // csvの読み込み
                using (var csv = new CsvReader(reader, CultureInfo.CurrentCulture))
                {
                    // ヘッダ読み込み
                    csv.Read();
                    csv.ReadHeader();
                    // 値読み込み
                    while (csv.Read())
                    {
                        const int ID = 0;
                        const int X = 1;
                        const int Y = 2;
                        const int Z = 3;
                        int id = csv.GetField<int>(ID);
                        Vector3 position = new Vector3(csv.GetField<float>(X), csv.GetField<float>(Y), csv.GetField<float>(Z));
                        syllabusFeature.Add(id, position);
                    }
                }
            }

            yield break;
        }

        static IEnumerator ImportFeature(TextMeshProUGUI text)
        {
            text.text += "\na";
            // csvの取得
            UnityWebRequest request = UnityWebRequest.Get(featurePath);
            yield return request.SendWebRequest();

            text.text += "b";

            // TextReaderの生成
            string data = request.downloadHandler.text;
            var reader = new StringReader(data);

            text.text += "c";

            try
            {
                syllabusFeature = new Dictionary<int, Vector3>();
                using (reader)
                {
                    // csvの読み込み
                    using (var csv = new CsvReader(reader, CultureInfo.CurrentCulture))
                    {
                        // ヘッダ読み込み
                        csv.Read();
                        csv.ReadHeader();
                        // 値読み込み
                        while (csv.Read())
                        {
                            const int ID = 0;
                            const int X = 1;
                            const int Y = 2;
                            const int Z = 2;
                            int id = csv.GetField<int>(ID);
                            Vector3 position = new Vector3(csv.GetField<float>(X), csv.GetField<float>(Y), csv.GetField<float>(Z));
                            syllabusFeature.Add(id, position);
                        }
                    }
                }
            }
            catch (System.Exception e)
            {
                text.text += "\n" + e.ToString();
                throw;
            }

            yield break;
        }
    }
}
