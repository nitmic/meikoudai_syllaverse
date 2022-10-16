using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;
using System.IO;
using UnityEngine.Networking;
using System.Text;

public class LoadText : MonoBehaviour
{
    [SerializeField]
    private TextMeshProUGUI debugText;
    private string result;

    private string tmp;

    void Start()
    {
        // StartCoroutine (textLoad());
    }

    public void click()
    {
        StartCoroutine(textLoad());
        //debugText.text = "hello";
    }


    IEnumerator textLoad()
    {
        string url = Application.streamingAssetsPath + "/download/";
#if UNITY_EDITOR
        DirectoryInfo dir = new DirectoryInfo(url);
        FileInfo[] info = dir.GetFiles("*.php");
        string[] fName = new string[info.Length];
        for (int i = 0; i < info.Length; i++)
        {
            fName[i] = info[i].Name;
        }
#else
        UnityWebRequest request = UnityWebRequest.Get(url + "list.txt");
        yield return request.SendWebRequest();
        if (request.result == UnityWebRequest.Result.ConnectionError)
        {
            // エラー処理
            debugText.text = "Error";
            yield break;
        }
        string content = request.downloadHandler.text;
        string[] fName = content.Split(System.Environment.NewLine);
#endif

        StringBuilder text = new StringBuilder();
        foreach (string f in fName)
        {
            Debug.Log(f);

            string filepath = Application.streamingAssetsPath + "/download/" + f;
            Debug.Log(filepath);
            text.Append(filepath);
            if (filepath.Contains("://") || filepath.Contains(":///"))
            {
                WWW www = new WWW(filepath);
                yield return www;
                result = www.text;
            }
            else
            {
                result = File.ReadAllText(filepath);
            }

            //正規表現パターンとオプションを指定してRegexオブジェクトを作成
            System.Text.RegularExpressions.Regex r =
                new System.Text.RegularExpressions.Regex(
                    @"<(div)\b[^>]*>(.*?)</\1>",
                    System.Text.RegularExpressions.RegexOptions.IgnoreCase
                    | System.Text.RegularExpressions.RegexOptions.Singleline);
            //TextBox1.Text内で正規表現と一致する対象をすべて検索
            System.Text.RegularExpressions.MatchCollection mc = r.Matches(result);

            // result = "";
            int i = 0;
            /*
            foreach (System.Text.RegularExpressions.Match m in mc){
                //正規表現に一致したグループと位置を表示
                // result += ("タグ:" + m.Groups[1].Value+
                //     "\nタグ内の文字列:" + m.Groups[2].Value + 
                //     "\nタグの位置:" + m.Groups[1].Index);
                // Debug.Log("タグ:" + m.Groups[1].Value+
                //     "\nタグ内の文字列:" + m.Groups[2].Value + 
                //     "\nタグの位置:" + m.Groups[1].Index);
                result += i + "：" + m.Groups[2].Value + "\n";
                Debug.Log(i + "：" + m.Groups[2].Value);
                i++;
            }
            */

            Debug.Log(mc[1].Groups[2].Value.Split("&nbsp;"));
            Debug.Log(mc[1].Groups[2].Value.Split("&nbsp;")[2]);
            //tmp += mc[1].Groups[2].Value.Split("&nbsp;")[2].Split("<br>")[0] + "/";
            text.Append(mc[1].Groups[2].Value.Split("&nbsp;")[2].Split("<br>")[0]);
            text.Append("/");
            debugText.text = text.ToString();
            yield return new WaitForSeconds(0.1f);
        }

        //debugText.text = tmp;
    }

}
