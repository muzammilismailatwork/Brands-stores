<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Store;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
        $brands= Brand::all();
        $countBrands = $brands->count();
        $stores= Store::all();
        $countStores = $stores->count();
        $activeBrands =Brand::where("status", "Active")->count();
        $activeStores =Store::where("status", "Active")->count();
        $data = [
            "countBrands"=>$countBrands,
            "countStores"=>$countStores,
            "activeBrands"=>$activeBrands,
            "activeStores"=>$activeStores,
        ];
        return view("frontend.index", compact("data"));
    }
    public function dashboard(){
        $brands= Brand::all();
        $countBrands = $brands->count();
        $userBrands = Brand::where("user_id",auth()->user()->id);
        $countUserBrands = $userBrands->count();
        $stores= Store::all();
        $countStores = $stores->count();
        $userStores = Store::where("user_id",auth()->user()->id);
        $countUserstores = $userStores->count();
        $data=[
            "countBrands"=>$countBrands,
            "countStores"=>$countStores,
            "countUserBrands"=>$countUserBrands,
            "countUserstores"=>$countUserstores,
        ];
        return view("frontend.dashboard", compact("data"));
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
