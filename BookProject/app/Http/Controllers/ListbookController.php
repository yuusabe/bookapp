<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

class ListbookController extends Controller
{
    function listbook(Request $request){
        $number =  $request::all();
        return view('information_of_book',conpact('number'));
    }
}
