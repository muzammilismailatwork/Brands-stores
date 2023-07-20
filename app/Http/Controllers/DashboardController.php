<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
        return view("frontend.index");
    }
    public function signup(){
        return view("frontend.signup");
    }
    public function signin(){
        return view("frontend.signin");
    }
    public function forgot(){
        return view("frontend.forgot_password");
    }

}
