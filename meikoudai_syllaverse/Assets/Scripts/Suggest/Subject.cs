using System.Text;
using System.Runtime.Serialization;

namespace Suggest
{
    /// <summary>
    /// 科目クラス
    /// 
    /// </summary>
    [DataContract]
    public class Subject
    {
        /// <summary>
        /// ファイル番号
        /// </summary>
        [DataMember] public int id { get; set; }
        /// <summary>
        /// 科目名前
        /// </summary>
        [DataMember] public string name { get; set; }
        /// <summary>
        /// 時間割番号
        /// </summary>
        [DataMember] public int timeTableId { get; set; }
        /// <summary>
        /// 担当教員
        /// </summary>
        [DataMember] public string teacher { get; set; }
        /// <summary>
        /// 対象学科
        /// </summary>
        [DataMember] public string[] department { get; set; }
        /// <summary>
        /// 学年
        /// </summary>
        [DataMember] public int grade { get; set; }
        /// <summary>
        /// 科目区分
        /// </summary>
        [DataMember] public int creditsNumber { get; set; }
        [DataMember] public int half { get; set; }
        [DataMember] public int day { get; set; }
        [DataMember] public int startTime { get; set; }
        [DataMember] public int endTime { get; set; }

        public override string ToString()
        {
            return this.name;
        }

        public string ToStringLog()
        {
            StringBuilder log = new StringBuilder();

            log.Append("name:").Append(this.name).Append("\n");
            log.Append("teacher:").Append(this.teacher).Append("\n");
            log.Append("creditsNum:").Append(this.creditsNumber).Append("\n");
            log.Append("timeTableId:").Append(this.timeTableId).Append("\n");
            log.Append("id:").Append(this.id).Append("\n");
            log.Append("department:[").Append(string.Join(", ", this.department)).Append("]\n");
            log.Append($"timeTable:{this.half},{this.day},{this.startTime}-{this.endTime}\n");

            return log.ToString();
        }
    }
}
