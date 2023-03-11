from __future__ import annotations
from argparse import ArgumentParser
import numpy as np
from gensim.models.doc2vec import Doc2Vec
from gensim.models.doc2vec import TaggedDocument
import MeCab
import re
from glob import glob
import pandas as pd
from sklearn.decomposition import PCA
from pathlib import Path

debug = False
dim = 300

def argument():
    """引数"""
    parser = ArgumentParser()
    parser.add_argument("modelPath", type=Path)
    parser.add_argument("phpDir", type=Path)
    parser.add_argument("outCsvPath", type=Path)
    args = dict(vars(parser.parse_args()))
    return args

def modelLoad(modelPath = Path("jawiki.doc2vec.dmpv300d.model"))->Doc2Vec:
    """
    Doc2Vecのモデルをロードする．\n
    パラメータを二次記憶上に展開
    """
    model = Doc2Vec.load(str(modelPath), mmap="r")
    return model

def words(text:str)->list[str]:
    """
        文章から単語を抽出
    """
    out_words = []
    tagger = MeCab.Tagger()
    tagger.parse('')
    node = tagger.parseToNode(text)

    while node:
        word_type = node.feature.split(",")[0]
        if not word_type in ["空白", "BOS/EOS"]:
            out_words.append(node.surface)
        node = node.next
    return out_words

def doc2TaggedDoc(text:str, tagName:str)->TaggedDocument:
    """
    読み込んだPHPファイルからTaggedDocumentを生成．\n
    """
    # 改行・全角スペースを置換
    text = text.replace("\n", "").replace("　", " ").replace("&nbsp;", " ")
    
    m = re.search(r'授業科目名(.+?)時間割番号.+?学科・年次(.+?)科目区分(.+?)単位数.+?授業の目的・達成目標(.+?)授業計画(.+?)成績評価の方法', text)

    sentences = []
    for group in m.groups():
        sentences.append(re.sub(r'<.+?>', '', group))

    word_list = words(' '.join(sentences))

    taggedDoc = TaggedDocument(words=word_list, tags=[tagName])

    return taggedDoc

def readFile(path : Path)-> str:
    """
    ファイルから文字のロード
    """
    with open(path, 'r', encoding='utf-8') as f:
        text = f.read()

    return text

def Docs2Vectors300d(model:Doc2Vec, phpDir:Path):
    """
    シラバスファイルから300次元ベクトルに変換する．
    """
    php = phpDir.glob("**/*.php")
    vec_list = []
    name = []

    for i, path in enumerate(php):
        if debug and i == 100:
            break

        text = readFile(path)

        taggedDoc = doc2TaggedDoc(text, path.stem)

        vec = model.infer_vector(taggedDoc.words)
        vec_list.append(vec)
        name.append(taggedDoc.tags[0])

    df = pd.DataFrame(vec_list, index=name)
    df.index.name = "id"
    return df

def vector300d2vector3d(docVec:pd.DataFrame):
    """
    300次元のベクトルを3次元に圧縮
    """
    def standardization(x:pd.Series)->pd.Series:
        """分布の標準化"""
        return (x - x.mean()) / x.std()

    docVecStd = docVec.copy()
    docVecStd.apply(standardization)

    #主成分分析の実行
    pca = PCA()
    pca.fit(docVecStd)
    # データを主成分空間に写像
    feature = pca.transform(docVecStd)
    pc_df = pd.DataFrame(feature, columns=[f"PC{x+1}" for x in range(len(docVecStd.columns))], index=docVec.index)

    pc_df = pc_df.apply(lambda x: (x - x.mean())/(x.max() - x.min()))

    return pc_df

if __name__ == "__main__":
    args = argument()
    model = modelLoad(args["modelPath"])
    df_feature = Docs2Vectors300d(model, args["phpDir"])
    df_pc = vector300d2vector3d(df_feature)
    df_pc.to_csv(args["outCsvPath"])

