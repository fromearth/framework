<?php
/**
 * 「Hello world」表示（コントローラだけで完結編）
 *
 * @filename hello_world_controller.php
 * @category CakePhp
 * @package  CakePhpHelloWorld
 * @author   fromearth
 * @link     https://github.com/fromearth
 */

/**
 * 「Hello world」表示（コントローラだけで完結編）
 * ビューを使わずコントローラのみで画面表示させる
 *
 * @url http://www.example.com/hello_world
 */
class HelloWorldController extends AppController
{
    public $name = 'HelloWorld';    // 指定しない場合、クラス名から抽出される
    public $uses = null;            // $uses = array() でも同じくモデルを使わない指定
    public $autoRender = false;     // デフォルトtrueに対し、false指定でビューを使わないよう抑制

    /**
     * デフォルトで実行されるアクションがこのindex()
     *
     * @return void
     */
    function index()
    {
        echo "Hello world!";
    }
}
