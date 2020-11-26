<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Account;

class LoginController extends BaseController
{
    public function checklogin(){
        
        $account = new Account;

        $email_in = "無し";

        if (!empty($_COOKIE["email"]))
        {
            $email_in = $_COOKIE["email"];
        }

        $data = $account::where('mail_address', $email_in)->first();
        
        return view('login_check',compact('data'));
    }
}