<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $data['categories'] = Category::all();
        return view("admin.add_product", $data);
    }
    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'product_name' => 'required|string',
            'sku'=> 'required|string',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $product = new product();
        $product->product_name = $request->product_name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        if($request->hasfile('image')){
            $imagepath = $request->file('image')->store('product_images', 'public');
            $product->image = $imagepath;
        }
        $product->save();

        return redirect()->back();

    }
}
