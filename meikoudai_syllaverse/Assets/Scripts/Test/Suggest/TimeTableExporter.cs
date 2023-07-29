using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Runtime.Serialization;
using System.Globalization;
using UnityEngine;
using UnityEngine.Networking;
using UnityEngine.Events;
using CsvHelper;
using Cysharp.Threading.Tasks;

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
        public static async UniTask Import()
        {
            if (timetable is not null)
            {
                return;
            }

            List<Subject> syllabusList = default;

            var task1 = ImportXML<List<Subject>>(syllabusPath);
            var task2 = ImportXML<List<int>[][][]>(timetablePath);
            var task3 = ImportFeature();

            syllabusList = await task1;
            timetable = await task2;
            await task3;

            syllabus = new Dictionary<int, Subject>();
            foreach (Subject item in syllabusList)
            {
                syllabus[item.id] = item;
            }
        }

        public static async UniTask Import(TextMeshProUGUI ugui)
        {
            if (timetable is not null)
            {
                return;
            }

            ugui.text += "\n1";

            List<Subject> syllabusList = default;

            var task1 = ImportXML<List<Subject>>(syllabusPath);
            var task2 = ImportXML<List<int>[][][]>(timetablePath);
            var task3 = ImportFeature(ugui);

            ugui.text += "2";
            syllabusList = await task1;
            ugui.text += "3";
            timetable = await task2;
            ugui.text += "4";
            await task3;
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
        static async UniTask<T> ImportXML<T>(string xmlPath)
        {
            T result;
            DataContractSerializer deserializer = new DataContractSerializer(typeof(T));

            UnityWebRequest request = UnityWebRequest.Get(xmlPath);
            await request.SendWebRequest();

            byte[] data = request.downloadHandler.data;
            using (MemoryStream memory = new MemoryStream(data))
            {
                result = (T)deserializer.ReadObject(memory);
            }

            return result;
        }

        static async UniTask ImportFeature()
        {
            // csvの取得
            UnityWebRequest request = UnityWebRequest.Get(featurePath);
            await request.SendWebRequest();

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
                    await csv.ReadAsync();
                    csv.ReadHeader();
                    // 値読み込み
                    while (await csv.ReadAsync())
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
        }

        static async UniTask ImportFeature(TextMeshProUGUI text)
        {
            text.text += "\na";
            // csvの取得
            UnityWebRequest request = UnityWebRequest.Get(featurePath);
            await request.SendWebRequest();

            text.text += "b";

            // TextReaderの生成
            string data = request.downloadHandler.text;
            var reader = new StringReader(data);

            text.text += "c";

            syllabusFeature = new Dictionary<int, Vector3>();
            using (reader)
            {
                // csvの読み込み
                using (var csv = new CsvReader(reader, CultureInfo.CurrentCulture))
                {
                    // ヘッダ読み込み
                    await csv.ReadAsync();
                    csv.ReadHeader();
                    // 値読み込み
                    while (await csv.ReadAsync())
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
    }
}
