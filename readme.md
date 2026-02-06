## 本リポジトリについて
WordPressのローカル検証用Docker環境です。  
MySQL 5.x / PHP 7.x を切り替えて、WordPressのアップデート検証に使えます。

- DB: MySQL（docker-compose.ymlで変更可能）
- Web: PHP Apache（WordPressは含まれないため、`html/` に任意バージョンを展開してください）

## 必要ファイル
- `docker-compose.yml`
- `html/`（この中にWordPressを展開配置）
- `php.ini`（任意：アップロード容量などを調整したい場合）

## 起動
```bash
docker compose up -d
# 旧表記でもOK: docker-compose up -d
```

###  wpインストール後、初期ウィザード時に必要になる情報
```
データベース名	wp_db
ユーザー名	wp_user
パスワード	wp_password
データベースのホスト名	db
テーブル接頭辞	wp_
```


### 起動
```
docker-compose up -d
```

### 管理画面
WordPressを html/ 直下に置いた場合（※別フォルダを挟んだ場合は適宜調整必要）
http://localhost:8080/wp-admin

### 環境
mysql5.5 ・・・docker-compose.ymlで書き換え可能
PHP 7.4.33 ・・・docker-compose.ymlで書き換え可能
wordpress ・・・任意のものをhtmlフォルダに展開

### 起動後のphp確認方法
```
docker exec wp-app php -v
```

### wpインストール後のwpバージョン確認方法
```
docker exec wp-app wp core version --allow-root
```
