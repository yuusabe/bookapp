<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Account;

class LoginController extends BaseController
{
    function check(Request $request){
        
        $account = new Account;

        $email_in = $request["email"];
        $pass_in = $request["pass"];

        $data = $account::where('mail_address', $email)->first();
        $pass = $data["password"];

        if($pass_in == $pass)
        {
            return view('list_of_books',compact('$data'));
        }

        return view('login');
    }
}