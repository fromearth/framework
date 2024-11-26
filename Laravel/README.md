# Laravel
PHPフレームワークLaravelをインストールして簡単な画面表示まで

## インストール準備
1. [<a href="https://www.google.co.jp/search?q=laravel+release+notes">Laravel release notes</a>]で検索してインストールしたいLaravelおよびPHPバージョンを決める
2. PHPをインストール
3. Composerをインストール
4. Node.jsをインストール（フロントエンド構築する場合）

## インストール（Laravelソースファイルを取得）
```sh
# Laravelバージョン9の最新をmyprojectディレクトリに取得する
composer create-project "laravel/laravel=9.*" myproject

# Laravelの最新バージョンをmyprojectディレクトリに取得する
composer create-project laravel/laravel myproject
```

## 初期設定
1. 最低限の必要な設定（file: config/app.php）
```php
return [
    'timezone' => 'Asia/Tokyo',
    'locale' => 'ja',
```

2. 実行権限（Linuxなどファイル実行権限がある環境の場合）
```sh
cd /path/to/myproject
chmod -R 777 storage bootstrap/cache
```

## Webサーバを起動
※別のWebサーバを使う場合はドキュメントルートをソースのpublicに設定する。
```sh
cd /path/to/myproject
php artisan serve --port=8000
```

## ページ表示確認
WebブラウザにURLを打ち込んで表示を確認します  
http://localhost:8000  
（http://サーバ名:8000）
