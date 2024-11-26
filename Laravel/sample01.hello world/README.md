# 「Hello world!」を画面表示する
> 画面に「Hello world!」を表示する

## ルート定義
_file: routes/web.php_
```php
Route::get('/sample01', function () {
    return view('sample01');
});
```

## ビューファイル作成
_file: resources/views/sample01.blade.php_
```php
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>サンプル01</title>
</head>
<body>
    <h1>Hello world!</h1>
</body>
</html>
```

## Webサーバを起動して動作確認
1. Laravelの簡易Webサーバを起動する
```sh
php artisan serve --port=8000
```
2. ブラウザで確認する  
http://localhost:8000/sample01
