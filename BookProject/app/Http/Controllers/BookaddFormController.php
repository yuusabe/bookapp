<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class BookaddFormController extends Controller
{
    private $formItems = ["img_file", "title", "title_h","year", "author", "author_h","publisher","category"];

    private $validator = [
        "img_file" => "required|file|image|mimes:jpeg,png",
		"title" => "required|string",
        "title_h" => "required|string",
        "year" => "required|string",
		"author" => "required|string",
        "author_h" => "required|string",
        "publisher" => "required|string",
		"category" => "required|string"
    ];

    function show(){
        return view('book_add');
    }

    function post(){
        $input = $request->only($this->formItems);
        $validator = Validator::make($input, $this->validator);
		if($validator->fails()){
			return redirect()->action("BookaddFormController@show")
				->withInput()
                ->withErrors($validator);
		}
        //セッションに書き込む
		$request->session()->put("form_input", $input);

        return redirect()->action("BookaddFormController@confirm");
    }

    function confirm(Request $request){
		//セッションから値を取り出す
		$input = $request->session()->get("form_input");
		
		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->action("BookaddFormController@show");
		}
        return view("book_add_check",["input" => $input]);
    }

    function send(Request $request){
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");
        
        //セッションに値が無い時はフォームに戻る
        if(!$input){
            return redirect()->action("BookaddFormController@show");
        }

        //ここでメールを送信するなどを行う

        //セッションを空にする
        $request->session()->forget("form_input");

        return redirect()->action("BookaddFormController@complete");
    }

    function complete(){	
		return view("completion");
	}
}