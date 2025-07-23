<?php

namespace App\Http\Controllers;

use App\Models\store_manage;
use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    //
    public function index(){
        $data['products'] = Product::all();
        $data['store_manage'] = store_manage::latest()->first();
        return view('welcome', $data);
    }

    public function view(){
        return view('admin.store_manage');
    }

    public function store(Request $request){
        $store_manage = new store_manage();
        if($request->hasFile('logo')){
            $image_path = $request->file('logo')->store('images' , 'public');
            $store_manage->logo = $image_path;
        }
        if ($request->hasFile('hero_image')) {
            $image_path = $request->file('hero_image')->store('images', 'public');
            $store_manage->hero_image = $image_path;
        }
        $store_manage->save();
        return redirect()->back();
    }
}
