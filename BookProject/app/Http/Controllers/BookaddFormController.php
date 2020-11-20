<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Log;

class BookaddFormController extends Controller
{
    private $formItems = ["img_file", "title", "title_h","year", "author", "author_h","publisher","category"];

    private $validator = [
        //"img_file" => "required",

		"title" => "required",
        "title_h" => "required",
        "year" => "required",
		"author" => "required",
        "author_h" => "required",
        "publisher" => "required",
		"category" => "required"
    ];

    function show(){
        return view('book_add');
    }

    function post(Request $request){
        //$input = $request->all();
        $input = $request->except('img_file');
        

        $img_file = $request->file('img_file');
        //Log::debug($input1);
        
        
        $temp_path = $img_file->store('public/temp');
        //$temp_path = array($temp_path);
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);
        
        //$read_temp_path = array($read_temp_path);
        Log::debug($temp_path);

        $input = array_merge(
            $input, array('temp_path' => $temp_path),array('read_temp_path' => $read_temp_path)
        );
        Log::debug($input);

        $validator = Validator::make($input, $this->validator);
		if($validator->fails()){
			return redirect()->action('App\Http\Controllers\BookaddFormController@show')
				->withInput()
                ->withErrors($validator);
		}
        //セッションに書き込む
        $request->session()->put("form_input", $input);
        
        return redirect()->action('App\Http\Controllers\BookaddFormController@confirm');
    }

    function confirm(Request $request){
		//セッションから値を取り出す
		$input = $request->session()->get("form_input");

		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->action('App\Http\Controllers\BookaddFormController@show');
		}
        return view("book_add_check",["input" => $input]);
    }

    function send(Request $request){
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");
        
        //セッションに値が無い時はフォームに戻る
        if(!$input){
            return redirect()->action("App\Http\Controllers\BookaddFormController@show");
        }

        //ここでメールを送信するなどを行う

        //セッションを空にする
        $request->session()->forget("form_input");

        return redirect()->action("App\Http\Controllers\BookaddFormController@complete");
    }

    function complete(){	
		return view("completion");
	}
}