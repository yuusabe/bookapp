<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use App\Models\Account;
use App\Models\Lend_book;
use Validator;
use Illuminate\Support\Facades\Log;


class AccountController extends Controller
{
    //アカウント登録時のコントローラー
    private $formItems = ["account_name", "address", "password","accounttype"];
    //private $formItems_change = ["account_number"];

    private $validator = [
        "account_name" => "required",
        "address" => "required",
        "password" => "required",
        "accounttype" => "required"
    ];

    function show(){
        return view('account_management');
    }
    function post(Request $request){


        if($request->has('add')){



            $input = $request->only($this->formItems);
            
            $validator = Validator::make($input, $this->validator);
            if($validator->fails()){
                return redirect()->action('App\Http\Controllers\AccountController@show')
                    ->withInput()
                    ->withErrors($validator);
            }
            
            //セッションに書き込む
            $request->session()->put("account_input", $input);
            return redirect()->action('App\Http\Controllers\AccountController@confirm');


        }elseif($request->has('change')){

            $input_change1 = PostRequest::input('account_number');
            $input_change2 = PostRequest::input('account_name');
            $input_change3 = PostRequest::input('mail_address');
            $input_change4 = PostRequest::input('manager_flag');

            $input_change = array(
                $input_change1,$input_change2,$input_change3,$input_change4
            );

            $request->session()->put("accountc_input",$input_change);
            return redirect()->action('App\Http\Controllers\AccountController@change');
        }

    }
    //書籍登録関連画面
    function confirm(Request $request){
            //セッションから値を取り出す
            $input = $request->session()->get("account_input");
            //セッションに値が無い時はフォームに戻る
            if(!$input){
                return redirect()->action('App\Http\Controllers\AccountController@show');
            }
            return view("account_management_check",["input" => $input]);
    }

    function send(Request $request){
        //セッションから値を取り出す
        $input = $request->session()->get("account_input");
        //セッションに値が無い時はフォームに戻る
        if(!$input){
            return redirect()->action('App\Http\Controllers\AccountController@show');
        }



        //モデルクラスのインスタンス化
        $account_table = new Account();
        //テーブルのカウント
        $count_account=Account::get()->count();
        //登録アカウントのID用意
        $count_account++;
        //データ挿入
        if($input["accounttype"]=="一般ユーザ"){
            $account_table->create([
                'account_number' => $count_account,
                'account_name' => $input["account_name"],
                'mail_address' => $input["address"],
                'password' => $input["password"],
                'manager_flag' => FALSE,
                'a_logic_flag' => true
            ]);
        }else{
            $account_table->create([
                'account_number' => $count_account,
                'account_name' => $input["account_name"],
                'mail_address' => $input["address"],
                'password' => $input["password"],
                'manager_flag' => TRUE,
                'a_logic_flag' => TRUE
            ]);
        }
        //セッションを空にする
        $request->session()->forget("account_input");
        return view("completion");
    }

    function list(){
        $a_list = Account::select()
        ->where('a_logic_flag',TRUE)
        ->get();
        return view('account_management', compact('a_list'));
    }


    //書籍編集関連画面
    function change(Request $request){
        //セッションから値を取り出す
        $input = $request->session()->get("accountc_input");
        Log::debug($input);
        //セッションに値が無い時はフォームに戻る
        if(!$input){
            return redirect()->action('App\Http\Controllers\AccountController@show');
        }
        return view("account_change",["input" => $input]);
}
}
