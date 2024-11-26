# 「Hello world!」を画面表示する
> 画面に「Hello world!」を表示する
>
> ルート定義からコントローラを呼び出す一般的な処理の流れ

## ルート定義
_file: routes/web.php_
```php
use App\Http\Controllers\SampleController;

Route::get('/sample02', [SampleController::class, 'show']);
```

## コントローラ作成
1. ファイル作成
```sh
php artisan make:controller SampleController
composer dump-autoload
```
ファイル生成後はオートローダーを作り直します。

2. コントローラ実装  
_file: app/Http/Controllers/SampleController.php_
```php
class SampleController extends Controller
{
    public function show()
    {
        $message = 'Hello world!';

        return view('sample02', compact('message'));
    }
}
```

## ビューファイル作成
_file: resources/views/sample02.blade.php_
```php
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>サンプル02</title>
</head>
<body>
    <h1>{{ $message }}</h1>
</body>
</html>
```

## Webサーバを起動して動作確認
1. Laravelの簡易Webサーバを起動する
```sh
php artisan serve --port=8000
```
2. ブラウザで確認する  
http://localhost:8000/sample02
