<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// 尊貴登録ページの設定
Route::get('/register', function () {
    return view('task.register');
});
// ログインページの設定
Route::get('/login', function () {
    return view('task.login');
});
