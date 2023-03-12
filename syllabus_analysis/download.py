# -*- coding: utf-8 -*-
import argparse
import requests
import os
import re
from pprint import pprint


URL = 'https://syllabus.ict.nitech.ac.jp/search.php'
SEARCH_PATH = 'Assets/StreamingAssets/search'
SUBJECT_PATH = 'Assets/StreamingAssets/download'


def wget(URL: str, savePath: str, postData: dict = None):
    """
    URLのページをダウンロード
    Parameters
    ------
    URL : str
        ダウンロードするページのURL
    savePath : str
        保存するファイルのパス
        相対・絶対両方可
    postData : dict
        postする場合のデータ
        無ければ省略
    """
    response = requests.post(URL, postData)
    with open(savePath, 'wb') as f:
        f.write(response.content)


def search_download():
    """
    'https://syllabus.ict.nitech.ac.jp/search.php'にある全ページをダウンロード
    """
    print(f'Downloading... page={0} ({URL})')

    wget(URL, os.path.join(SEARCH_PATH, 'page_0.php'))

    with open(os.path.join(SEARCH_PATH, 'page_0.php')) as f:
        fileContent = f.read()
    match = re.search(
        r'\d+</a>\&nbsp;\&nbsp;\&nbsp;\(<a\ href="JavaScript:course_custom_paging\(\d+\)">次へ', fileContent)
    match = re.match('\d+', match.group())
    pageRange = int(match.group())

    for i in range(1, pageRange):
        print(f'Downloading... page={i} ({URL})')
        wget(
            URL,
            os.path.join(SEARCH_PATH, f'page_{i}.php'),
            {'page': str(i)}
        )
        if(is_debug and 100 < i):
            break


def view_download():
    """
    SEARCH_PATHにダウンロードした'https://syllabus.ict.nitech.ac.jp/search.php' のページから、科目ごとのシラバスページを全てダウンロード
    関係ないファイルがあるとエラーを吐く
    """
    def view_download_on_list(searchPageFilePath: str):
        """
        ファイルから正規表現で科目ごとのページのURLを検索
        ダウンロード
        Parameters
        ----------
        searchPageFilePath : str
            検索するファイルのパス
            '[https://syllabus.ict.nitech.ac.jp/search.php](https://syllabus.ict.nitech.ac.jp/search.php)'でダウンロードしたもの
        """
        print(
            f'Loading... {os.path.basename(searchPageFilePath)} ({searchPageFilePath})')

        with open(searchPageFilePath) as f:
            fileContent = f.read()
        viewList = re.findall(
            r'(?:https://syllabus\.ict\.nitech\.ac\.jp/view\.php\?id=)(\d+)',
            fileContent
        )
        for subjectId in viewList:
            print(
                f'\tDownloading... "https://syllabus.ict.nitech.ac.jp/view.php?id={subjectId}"'
            )

            wget(
                f'https://syllabus.ict.nitech.ac.jp/view.php?id={subjectId}',
                os.path.join(SUBJECT_PATH, f'{subjectId}.php')
            )

            if(is_debug):
                pprint(viewList)
                break

    fileList = os.listdir(SEARCH_PATH)

    fileMap = map(
        lambda fileName: os.path.join(SEARCH_PATH, fileName),
        fileList
    )
    for filePath in fileMap:
        view_download_on_list(filePath)


if __name__ == '__main__':
    parser = argparse.ArgumentParser()
    parser.add_argument('-d', '--debug', action='store_true')

    args = parser.parse_args()
    is_debug = args.debug

    os.makedirs(SEARCH_PATH, exist_ok=True)
    os.makedirs(SUBJECT_PATH, exist_ok=True)

    search_download()
    view_download()
