<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function brands(){
        return view("frontend.brands");
    }
    public function create(){
        return view("frontend.create_brand");
    }
}
