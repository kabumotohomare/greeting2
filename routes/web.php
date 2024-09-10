<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/route/hello', function () {
    return '<h1>Hello</h1>';
});
*/

//単純なあいさつ
//http://localhost/comments/morning
Route::get('/comments/morning', function () {
    return '<h1>朝のあいさつ</h1><h2>おはようございます</h2>';
});

//http://localhost/comments/afternoon
Route::get('/comments/afternoon', function () {
    return '<h1>昼のあいさつ</h1>
    <h2>こんにちは</h2>';
});

//http://localhost/comments/evening
Route::get('/comments/evening', function () {
    return '<h1>夕方のあいさつ</h1>
    <h2>こんばんは</h2>';
});

//http://localhost/comments/night
Route::get('/comments/night', function () {
    return '<h1>夜のあいさつ</h1>
    <h2>おやすみ</h2>';
});

/*URLによってメッセージが変わる
パラメータを抽出し、comments/freeword/xxxにアクセスしたら、xxxをビューに渡すというルーティング
パラメータを{msg}とする
パラメータ{msg}をmsgという名前で受け取る
*/

//http://localhost/comments/freeword/xxx
Route::get('/comments/freeword/{msg}', function ($msg) {
    return view('message2.word100', ['msg' => $msg]);
});

/*ランダムなメッセージ
comments/randomにアクセスしたらビューを呼び出す。
ビュー側のword101ファイルにはランダムに文字を表示する関数が記述されている。*/

//http://localhost/comments/random
Route::get('/comments/random', function () {
    return view('message2.word101');
});
