<?php

namespace App\Http\Controllers;
use App\Models\Blist;

//use Illuminate\Http\Request;
use Request;


class ListbookController extends Controller
{
    function listbook(Request $request){
        $number =  $request::all();

        $info = Blist::where('account_number',$number['number']) -> get();

        return view('information_of_book',compact('info'));
    }
}
