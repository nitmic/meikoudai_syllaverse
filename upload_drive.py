import os
import requests
import argparse
import json


def token_refresh(client_id: str, client_secret: str, refresh_token: str) -> str:
    """
    アクセストークンの取得

    Parameter
    ---------
    client_id: str
        クライアントID
    client_secret: str
        クライアントシークレット
    refresh_token: str
        リフレッシュトークン
    
    Returns
    -------
    str
        アクセストークン
    """
    url = "https://oauth2.googleapis.com/token"
    data = {
        "client_id": client_id,
        "client_secret": client_secret,
        "refresh_token": refresh_token,
        "grant_type": "refresh_token"
    }
    response = requests.post(url, data)
    print(f"status : {response.status_code}")
    #print(f"{response.text}")

    result = json.loads(response.text)
    return result["access_token"]


def upload_drive(access_token: str, file_path: str):
    """
    ファイルのアップロード

    Parameter
    ---------
    access_token: str
        有効なアクセストークン
    file_path: str
        アップロードするファイアのパス
    """
    url = "https://www.googleapis.com/upload/drive/v3/files?uploadType=multipart"
    parent_folder_id = "199c08nYrtNqQit_eAcDufbviC9jDv4xF"

    header = {'Authorization': f'Bearer {access_token}'}

    param = {
        "name": os.path.basename(file_path),
        "parents": [parent_folder_id]
    }
    file = {
        "data": (
            "metadata",
            json.dumps(param),
            "application/json; charset=UTF-8"#"application/x-bzip2"
        ),
        "file": open(file_path, 'rb')
    }

    response = requests.post(url, headers=header, files=file)
    print(response.text)

if __name__ == "__main__":
    parser = argparse.ArgumentParser()
    parser.add_argument("bz2_path", type=str)
    parser.add_argument("client_id", type=str)
    parser.add_argument("client_secret", type=str)
    parser.add_argument("refresh_token", type=str)

    args = parser.parse_args()

    bz2_path = args.bz2_path
    client_id = args.client_id
    client_secret = args.client_secret
    refresh_token = args.refresh_token

    access_token = token_refresh(client_id, client_secret, refresh_token)
    upload_drive(access_token, bz2_path)