<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
    public function brands(Request $request){
        if($request->sort == "random") {
            $brands = Brand::inRandomOrder()->paginate(5);
        }
        elseif($request->sort == "oldest") {
            $brands = Brand::orderby("id", "asc")->paginate(5);
        }
        else{
            $brands = Brand::orderby("id", "desc")->paginate(5);
        }
        return view("frontend.brands", compact("brands"));
    }
    public function manage_brands(Request $request){
        if($request->sort == "random") {
            $brands = Brand::inRandomOrder()->paginate(5);
        }
        elseif($request->sort == "oldest") {
            $brands = Brand::orderby("id", "asc")->paginate(5);
        }
        else{
            $brands = Brand::orderby("id", "desc")->paginate(5);
        }
        return view("frontend.manage_brands", compact("brands"));
    }
    public function create(){
            return view("frontend.create_brand");

    }
    public function add_brand(Request $request){
        $x = $request->validate([
            "name" => "required|max:100",
            "website" => "required|max:500",
            "status" => "required",
        ]);
        Brand::create($x);
        return redirect()->route("create_store")->with("success", "Brand Created Successfully");
    }
    public function edit_brand(Brand $brand){
        return view("frontend.update_brand", compact("brand",));
    }
    public function update_brand(Request $request, $id){
        $x = $request->validate([
            "name" => "required|max:100",
            "website" => "required||max:500",
            "status" => "required",
        ]);
        $brand = Brand::find($id);
        $brand->update($x);
        return redirect()->route("brands")->with("success", "Brand Updated Successfully");
    }
    public function delete_brand($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route("brands")->with("success", "Brand Deleted Successfully");
    }
}
