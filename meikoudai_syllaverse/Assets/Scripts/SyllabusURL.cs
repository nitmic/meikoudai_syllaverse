using System.Text.RegularExpressions;
using UnityEngine;
using UnityEngine.Networking;
using Cysharp.Threading.Tasks;

public class SyllabusURL : MonoBehaviour
{
    const string host = "https://syllabus.ict.nitech.ac.jp/";
    /// <summary>
    /// シラバス検索のURL
    /// </summary>
    public static string searchURL;
    public static string viewURL;

    // Start is called before the first frame update
    async UniTask Start()
    {
        string indexPageText = await RequestIndexPage();
        searchURL = RegexSearch(indexPageText);
        viewURL = searchURL.Replace("search", "view");

        Debug.Log($"searchURL:{searchURL}\nviewURL:{viewURL}");
        Destroy(this.gameObject);
    }

    // シラバス公開システムをGET
    async UniTask<string> RequestIndexPage()
    {
        UnityWebRequest request = UnityWebRequest.Get(host);
        await request.SendWebRequest();

        return request.downloadHandler.text;
    }

    string RegexSearch(string text)
    {
        // Tab2のURLを取得
        const string pattern = @"<div.*?id=""tab2"".*?>(?:.|\s)*?<iframe.*?src=""(.+?)"".*?>";

        Match match = Regex.Match(text, pattern);
        string url = match.Groups[1].Value;

        Debug.Log($"{match.Value}\n==={pattern}===\n{text}\n===");

        return url;
    }
}
