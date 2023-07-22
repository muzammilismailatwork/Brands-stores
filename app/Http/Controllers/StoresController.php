<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;

class StoresController extends Controller
{

    public function stores(Request $request){
        if($request->sort == "random") {
            $stores = Store::inRandomOrder()->paginate(5);
        }
        elseif($request->sort == "oldest") {
            $stores = Store::orderby("id", "asc")->paginate(5);
        }
        else{
            $stores = Store::orderby("id", "desc")->paginate(5);
        }
        return view("frontend.stores", compact("stores"));

    }
    public function manage_stores(Request $request){
        if(auth()->user() == null){
            return redirect()->route("signin")->with("error","Please login for mange stores");
        }
        elseif(auth()->user()->admin) {
            if ($request->sort == "random") {
                $stores = Store::inRandomOrder()->paginate(5);
            } elseif ($request->sort == "oldest") {
                $stores = Store::orderby("id", "asc")->paginate(5);
            } else {
                $stores = Store::orderby("id", "desc")->paginate(5);
            }
            return view("frontend.manage_stores", compact("stores"));
        }
        else{
            if ($request->sort == "random") {
                $stores = Store::where("user_id", auth()->user()->id)->inRandomOrder()->paginate(5);
            } elseif ($request->sort == "oldest") {
                $stores = Store::where("user_id", auth()->user()->id)->orderby("id", "asc")->paginate(5);
            } else {
                $stores = Store::where("user_id", auth()->user()->id)->orderby("id", "desc")->paginate(5);
            }
            return view("frontend.manage_stores", compact("stores"));
        }

    }
    public function create(User $user){
        $brands = Brand::all();
        if (auth()->user() != null){
            return view("frontend.create_store", compact("brands"));
        }
        else{
            return redirect()->route("signin")->with("error","Please login for create store");
        }

    }
    public function add_store(Request $request){
        $x = $request->validate([
            "name" => "required|max:100",
            "address" => "required|max:500",
            "status" => "required",
            "brand_id" => "required",
        ]);
        $x["user_id"]= auth()->user()->id;
        Store::create($x);
        return redirect()->route("stores")->with("success", "Store Created Successfully");
    }
    public function edit_store(Store $store){
        $brands = Brand::all();
        return view("frontend.update_store", compact("store", "brands"));
    }
    public function update_store(Request $request, $id){
        $x = $request->validate([
            "name" => "required|max:100",
            "address" => "required|max:500",
            "status" => "required",
            "brand_id" => "required",
        ]);
        $store = Store::find($id);
        $store->update($x);
        return redirect()->route("stores")->with("success", "Store Updated Successfully");
    }
    public function delete_store($id){
        $store = Store::find($id);
        $store->delete();
        return redirect()->route("stores")->with("success", "Store Deleted Successfully");
    }

}
