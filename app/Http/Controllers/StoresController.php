<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{

    public function stores(){
        return view("frontend.stores");
    }
    public function create(){
        return view("frontend.create_store");
    }
}
