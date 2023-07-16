from __future__ import annotations
from argparse import ArgumentParser
from sentence_transformers import SentenceTransformer
import re
import pandas as pd
from sklearn.decomposition import PCA
from pathlib import Path

debug = False

def argument():
    """引数"""
    parser = ArgumentParser()
    parser.add_argument("-m", "modelPath", default=Path("sonoisa/sentence-bert-base-ja-mean-tokens-v2"), type=Path)
    parser.add_argument("phpDir", type=Path)
    parser.add_argument("outCsvPath", type=Path)
    args = dict(vars(parser.parse_args()))
    return args

def modelLoad(modelPath = Path("sonoisa/sentence-bert-base-ja-mean-tokens-v2")):
    """
    モデルをロードする．

    - © sonoisa 2021
    - CC-BY-SA
        (https://creativecommons.org/licenses/by-sa/4.0/)
        (https://creativecommons.org/licenses/by-sa/4.0/legalcode)
    - https://huggingface.co/sonoisa/sentence-bert-base-ja-mean-tokens-v2
    """
    model = SentenceTransformer(modelPath)
    return model

def readFile(path : Path)-> str:
    """
    ファイルから文字のロード\n
    必要部分を抽出
    """
    with open(path, 'r', encoding='utf-8') as f:
        text = f.read()

        # 改行・全角スペースを置換
    text = text.replace("\n", "").replace("　", " ").replace("&nbsp;", " ")
    
    # 抽出
    m = re.search(r'(授業科目名.+?)時間割番号.+?(学科・年次.+?)(科目区分.+?)単位数.+?(授業の目的・達成目標.+?)(授業計画.+?)成績評価の方法', text)
    sentence = []
    for group in m.groups():
        # HTMLタグの削除
        sentence.append(re.sub(r'<.+?>', '', group))

    return ' '.join(sentence)

def Docs2Vectors300d(model, phpDir:Path):
    """
    シラバスファイルから埋め込みベクトルに変換する．
    """
    php = phpDir.glob("**/*.php")
    sentences = []
    name = []

    for i, path in enumerate(php):
        if debug and i == 100:
            break

        text = readFile(path)
        
        name.append(path.stem)
        sentences.append(text)

    sentence_vectors = model.encode(sentences)

    # 埋め込みベクトルからデータフレームを作成
    df = pd.DataFrame(sentence_vectors, index=name)
    df.index.name = "id"
    return df

def vector2vector3d(docVec:pd.DataFrame):
    """
    ベクトルを3次元に圧縮
    """
    def standardization(x:pd.Series)->pd.Series:
        """分布の標準化"""
        return (x - x.mean()) / x.std()

    docVecStd = docVec.copy()
    docVecStd.apply(standardization)

    #主成分分析の実行
    pca = PCA()
    pca.fit(docVecStd)
    # データを主成分空間に
    feature = pca.transform(docVecStd)
    pc_df = pd.DataFrame(feature, columns=[f"PC{x+1}" for x in range(len(docVecStd.columns))], index=docVec.index)

    pc_df = pc_df.apply(standardization)

    return pc_df

if __name__ == "__main__":
    args = argument()
    model = modelLoad(args["modelPath"])
    df_feature = Docs2Vectors300d(model, args["phpDir"])
    df_pc = vector2vector3d(df_feature)
    df_pc.to_csv(args["outCsvPath"])

