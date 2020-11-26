<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Lend_book;

class AccountController extends Controller
{
    public function add(){
        //モデルクラスのインスタンス化
        $account_table = new Account();
        //テーブルのカウント
        $count_account=Account::get()->count();
        //登録アカウントのID用意
        $count_account++;
        //データ挿入
        $account_table->create([
            'account_number' => $count_account,
            'account_name' => $input["account_name"],
            'mail_address' => $input["mail_address"],
            'password' => $input["password"],
            'manager_flag' => $input["m_flag"],
            'logic_flag' => true
        ]);
    }
    public function change(){
        // 該当ユーザ検索・更新
        Account::where('account_number', $number)->update([
            'account_name' => $input['account_name'],
            'mail_address' => $input['mail_address'],
            'password' => $input['password'],
            'manager_flag' => $input['manager_flag']
            ]);
    }

    public function delete(){
                // 該当ユーザ検索・削除
                Account::where('account_number', $number)->update(['logic_flag' => false]);
    }
}
