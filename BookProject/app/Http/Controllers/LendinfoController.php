<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Book;
use App\Models\Book_category;
use App\Models\Category;
use App\Models\Lend_book;
use Illuminate\Support\Facades\Log;

class LendinfoController extends Controller
{
    Public function show(){
        //モデルクラスのインスタンス化
        $account_table = new Account();
        $book_table = new Book();
        $lend_table = new Lend_book();

        //貸出中書籍絞り込みから本番号、アカウント番号、返却日取得
        $lend_array=Lend_book::where('return_flag', false)->pluck('book_number', 'account_number', 'return_day');
        $account_name=Account::where('account_number', $lend_array['account_number'])->get();
        $book_name=Account::where('book_number', $lend_array['book_number'])->get();

        //貸出情報画面表示、変数受け渡し
        return view("RPA",compact('lend_array', 'account_name', 'book_name'));
    }
}
