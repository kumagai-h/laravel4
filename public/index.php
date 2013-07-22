<?php
/**
 * Laravel - Web職人のためのPHPフレームワーク
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| オートローダーの登録
|--------------------------------------------------------------------------
|
| Composerは便利なクラスローダーをアプリケーションのために自動的に
| 生成してくれます。使わない手はありません！ここでそのスクリプトを
| 読み込み、クラスを「手動で」読み込む手間から解放されましょう。
| リラックスできますね。
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| 明かりを灯す
|--------------------------------------------------------------------------
|
| 私達はPHP開発を照らす必要があります。ですから明かりを灯しましょう。
| これはフレームワークのブートストラップで準備は整っています。
| ではこのアプリケーションをロードしましょう。これでユーザーを
| 喜ばせるために、実行し、レスポンスをブラウザに送り返せます。
|
*/

$app = require_once __DIR__.'/../bootstrap/start.php';

/*
|--------------------------------------------------------------------------
| アプリケーションの実行
|--------------------------------------------------------------------------
|
| 一度アプリケーションの用意が整ったら、runメソッドを呼び出すことができます。
| リクエストを実行し、クライアントのブラウザにレスポンスを
| 送り返すことで、彼らのために作成した私達の創造的で素晴らしい
| アプリケーションを彼らが楽しめるようにしましょう。
|
*/

$app->run();

/*
|--------------------------------------------------------------------------
| アプリケーションのシャットアウト
|--------------------------------------------------------------------------
|
| appを実行し終えたら、シャットダウンイベント発行しましょう。
| これでシャットダウンの手順を進める前に後片付けを
| 全部済ませられます。これがリクエストの一番最後に発生します。
|
*/

$app->shutdown();