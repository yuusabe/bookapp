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

Route::get('/login', 'App\Http\Controllers\AppController@login');
Route::get('/list_of_books', 'App\Http\Controllers\AppController@list_of_books');
Route::get('/information_of_book', 'App\Http\Controllers\AppController@information_of_book');
Route::get('/lend_book', 'App\Http\Controllers\AppController@lend_book');
Route::get('/lend_check', 'App\Http\Controllers\AppController@lend_check');
Route::get('/return_book', 'App\Http\Controllers\AppController@return_book');
Route::get('/return_check', 'App\Http\Controllers\AppController@return_check');
Route::get('/completion', 'App\Http\Controllers\AppController@completion');
Route::get('/completion_account', 'App\Http\Controllers\AppController@completion_account');
Route::get('/completion_book', 'App\Http\Controllers\AppController@completion_book');
Route::get('/completion_category', 'App\Http\Controllers\AppController@completion_category');
Route::get('/mypage', 'App\Http\Controllers\AppController@mypage');
Route::get('/password_change', 'App\Http\Controllers\AppController@password_change');
