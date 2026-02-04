### もし別コンテナで作りたくなった場合
必要ファイルは基本docker-compose.yamlのみ。<br>
htmlフォルダのなかにwordpressを展開配置して、docker-compose up -d


###  初期ウィザード
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
http://localhost:8080/wp-admin
```

### 本番相当の環境
mysql5.5
wordpress 4.7.23
PHP 7.4.33

### php確認方法
```
docker exec wp-app php -v
```

### wp core確認方法
```
docker exec wp-app wp core version --allow-root
```
