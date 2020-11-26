<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Account;

class LoginController extends BaseController
{
    public function checklogin() 
    {
        $md = new Account();
        $data = $md->getData();

        return view('login_check', compact('data'));
    }
}