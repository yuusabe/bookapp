<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function booklist()
    {
        return view('booklist');
    }

    public function login()
    {
        return view('login');
    }
    public function list_of_books()
    {
        return view('list_of_books');
    }
    public function information_of_book()
    {
        return view('information_of_book');
    }
    public function lend_book()
    {
        return view('lend_book');
    }
    public function lend_check()
    {
        return view('lend_check');
    }
    public function return_book()
    {
        return view('return_book');
    }
    public function return_check()
    {
        return view('return_check');
    }
    public function mypage()
    {
        return view('mypage');
    }
    public function password_change()
    {
        return view('password_change');
    }
}
