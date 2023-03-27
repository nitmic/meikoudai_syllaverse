# -*- coding: utf-8 -*-
import argparse
import requests
import os
import re
from pprint import pprint
import abc
from pathlib import Path

class IScraper(metaclass=abc.ABCMeta):
    @abc.abstractclassmethod
    def scrape(self):
        raise NotImplementedError()

class NiTechScraper(IScraper):
    def __init__(self, is_debug = False):
        self.is_debug = is_debug
        self.OPEN_SYSTEM_URL = 'https://syllabus.ict.nitech.ac.jp'
        self.SEARCH_PATH = Path('meikoudai_syllaverse/Assets/StreamingAssets/search')
        self.SUBJECT_PATH = Path('meikoudai_syllaverse/Assets/StreamingAssets/download')
        self.SEARCH_URL = self.get_searchURL()
        self.VIEW_URL = self.SEARCH_URL.replace("search", "view")
        
        os.makedirs(self.SEARCH_PATH, exist_ok=True)
        os.makedirs(self.SUBJECT_PATH, exist_ok=True)

    def download(self, URL: str, savePath: Path = None, postData: dict = None):
        """
        URLのページをダウンロード
        
        Parameters
        ------
        URL : str
            ダウンロードするページのURL
        savePath : Path
            保存するファイルのパス
            相対・絶対両方可
        postData : dict
            postする場合のデータ
            無ければ省略

        Returns
        ----------
        str
            ページのテキスト
        """
        response = requests.post(URL, postData)

        if savePath is not None:
            with open(savePath, 'wb') as f:
                f.write(response.content)

        return response.text

    def get_searchURL(self):
        """
        シラバス公開システムのiframeからシラバス検索のURLを取得

        Returns
        -------
        str
            検索ページのURL
        """
        content = self.download(self.OPEN_SYSTEM_URL)

        # 正規表現からiframeのURLを取得
        pattern = r'<div id="tab2" class="tab">\s*<p><iframe src="(.+?)" width=850 height=600>\s*この部分は iframe 対応のブラウザで見てください。\s*</iframe></p>\s*</div>'
        
        match = re.search(pattern, content)
        
        return match.groups()[0]

    def search_page_download(self):
        """
        https://syllabus.ict.nitech.ac.jp/search.php 
        https://cmsX.ict.nitech.ac.jp/moodleX/syllabus/search.php \n
        にある全ページをダウンロード
        """
        print(f'Downloading... page={0} ({self.SEARCH_URL})')
        # 1ページ目(paging 0)をダウンロード
        fileContent = self.download(self.SEARCH_URL, self.SEARCH_PATH.joinpath('page_0.php'))

        pattern = r'\d+</a>\&nbsp;\&nbsp;\&nbsp;\(<a\ href="JavaScript:course_custom_paging\(\d+\)">次へ'
        match = re.search(pattern , fileContent)
        pattern = r'\d+'
        match = re.match(pattern, match.group())
        pageRange = int(match.group())

        for i in range(1, pageRange):
            print(f'Downloading... page={i} ({self.SEARCH_URL})')
            self.download(
                self.SEARCH_URL,
                self.SEARCH_PATH.joinpath(f'page_{i}.php'),
                {'page': str(i)}
            )

            if(self.is_debug and 100 < i):
                break

    def view_page_download_on_list(self, searchPageFilePath: Path):
        """
        ファイルから正規表現で科目ごとのページのURLを検索
        ダウンロード
        
        Parameters
        ----------
        searchPageFilePath : Path
            検索するファイルのパス
            https://syllabus.ict.nitech.ac.jp/search.php 
            https://cmsX.ict.nitech.ac.jp/moodleX/syllabus/search.php 
            でダウンロードしたもの
        """
        print(
            f'Loading... {searchPageFilePath.name} ({searchPageFilePath})')

        with open(searchPageFilePath) as f:
            fileContent = f.read()
            
        # URLを検索
        pattern = "(?:" + self.VIEW_URL.replace(".", r"\.") + r'\?id=)(\d+)'
        viewList = re.findall(pattern, fileContent)

        # 保存
        for subjectId in viewList:
            print(f'\tDownloading... "{self.VIEW_URL}?id={subjectId}"')

            self.download(f'{self.VIEW_URL}?id={subjectId}', self.SUBJECT_PATH.joinpath(f'{subjectId}.php'))

            if(self.is_debug):
                pprint(viewList)
                break

    def view_page_download(self):
        """
        SEARCH_PATHにダウンロードした検索結果のページから、科目ごとのシラバスページを全てダウンロード
        関係ないファイルがあるとエラー
        """
        searchFileIter = self.SEARCH_PATH.iterdir()
        for filePath in searchFileIter:
            self.view_page_download_on_list(filePath)

    def scrape(self):
        self.search_page_download()
        self.view_page_download()


if __name__ == '__main__':
    parser = argparse.ArgumentParser()
    parser.add_argument('-d', '--debug', action='store_true')

    args = parser.parse_args()

    NiTechScraper(args.debug).scrape()
