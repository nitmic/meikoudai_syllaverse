
namespace Suggest
{
    /// <summary>
    /// 期間
    /// </summary>
    public static class Term
    {
        /// <summary>
        /// 前期
        /// </summary>
        public const int Early = 0;
        /// <summary>
        /// 後期
        /// </summary>
        public const int Late = 1;
        public const int Quarter1 = 2;
        public const int Quarter2 = 3;
        public const int Quarter3 = 4;
        public const int Quarter4 = 5;
        public const int Other = 6;
        /// <summary>
        /// 配列長さ用
        /// </summary>
        public const int HALF_MAX = 7;

        public static int ToTerm(string s)
        {
            int half;
            switch (s)
            {
                case "前期":
                    half = Term.Early;
                    break;
                case "後期":
                    half = Term.Late;
                    break;
                case "第１クォーター":
                    half = Term.Quarter1;
                    break;
                case "第２クォーター":
                    half = Term.Quarter2;
                    break;
                case "第３クォーター":
                    half = Term.Quarter3;
                    break;
                case "第４クォーター":
                    half = Term.Quarter4;
                    break;
                default:
                    half = Term.Other;
                    break;
            }

            return half;
        }

    }
}
