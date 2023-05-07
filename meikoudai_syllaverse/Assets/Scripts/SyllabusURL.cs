using System.Text;
using System.Text.RegularExpressions;
using UnityEngine;
using UnityEngine.Networking;
using Cysharp.Threading.Tasks;

public class SyllabusURL : MonoBehaviour
{
    const string host = "https://syllabus.ict.nitech.ac.jp";
    /// <summary>
    /// シラバス検索のURL
    /// </summary>
    public static string searchURL { get; private set; }
    public static string viewURL { get; private set; }
    [SerializeField] TMPro.TMP_Text textUi;


    // Start is called before the first frame update
    async UniTask Start()
    {
        try
        {
            await RequestIndexPage();
        }
        catch (System.Exception e)
        {
            if (textUi is not null)
            {
                textUi.text += e.ToString();
            }
            throw e;
        }

        Debug.Log($"searchURL:{searchURL}\nviewURL:{viewURL}");

        if (textUi is not null)
        {
            textUi.text += $"\nsearchURL:{searchURL}\nviewURL:{viewURL}\n";
        }

        Destroy(this.gameObject);
    }

    // シラバス公開システムをGET
    async UniTask RequestIndexPage()
    {
        UnityWebRequest request = UnityWebRequest.Get(host);
        UnityWebRequestAsyncOperation op = request.SendWebRequest();
        while (!op.isDone)
        {
            await UniTask.Yield();
        }

        if (request.result == UnityWebRequest.Result.Success)
        {
            // 通信成功
            string indexPageText = request.downloadHandler.text;
            searchURL = RegexSearch(indexPageText);
            viewURL = searchURL.Replace("search", "view");
        }
        else
        {
            // 通信失敗
            searchURL = $"{host}/search.php";
            viewURL = $"{host}/view.php";
        }
    }

    /// <summary>
    /// シラバス公開システムのHTMLから検索ページのURLを抽出
    /// </summary>
    /// <returns>検索ページのURL</returns>
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
