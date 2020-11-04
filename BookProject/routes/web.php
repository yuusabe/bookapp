<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/booklist', 'App\Http\Controllers\AppController@booklist');
Route::get('/booklist', 'App\Http\Controllers\BooklistController@index');

Route::get('/ログイン', 'App\Http\Controllers\AppController@login');
Route::get('/書籍一覧', 'App\Http\Controllers\AppController@list_of_books');
Route::get('/書籍詳細', 'App\Http\Controllers\AppController@information_of_book');
Route::get('/貸出', 'App\Http\Controllers\AppController@lend_book');
Route::get('/貸出確認', 'App\Http\Controllers\AppController@lend_check');
Route::get('/返却', 'App\Http\Controllers\AppController@return_book');
Route::get('/返却確認', 'App\Http\Controllers\AppController@return_check');
Route::get('/マイページ', 'App\Http\Controllers\AppController@mypage');
Route::get('/パスワード変更', 'App\Http\Controllers\AppController@password_change');
