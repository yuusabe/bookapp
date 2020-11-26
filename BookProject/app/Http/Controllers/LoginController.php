<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Account;

class LoginController extends BaseController
{
    public function checklogin(){
        
        $account = new Account;

        $email_in = "無し";
        $pass_in = "無し";

        if (!empty($_COOKIE["email"]))
        {
            $email_in = $_COOKIE["email"];
        }
        if (!empty($_COOKIE["pass"]))
        {
            $pass_in = $_COOKIE["pass"];
        }

        $data = $account::where('mail_address', $email_in)->first();

        if ($pass_in == $data["password"])
        {
            $check = 1;
        }
        else
        {
            $check = 0;
        }
        
        return view('login_check',compact('check'));
    }
}