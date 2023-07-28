<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_detail(){
        return "<h1>This is login page</h1>";
    }

    public function login_process()
    {
        return "<h1>This is login process</h1>";
    }

    public function login_forget()
    {
        return "<h1>This is forgetpassword</h1>";
    }
}
