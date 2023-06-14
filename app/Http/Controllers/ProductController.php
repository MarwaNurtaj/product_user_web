<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Image;
use File;
use App\Models\Product;

class ProductController extends Controller
{
    public function add(){
        return view("backend.add");
    }
    //
    public function store(Request $request){
        if($request->image){
            $image = $request->file('image');
            $customName = rand().".".$image->getClientOriginalExtension() ;
            $path= public_path("uploads/".$customName);
            Image::make($image)->resize(212,264)->save($path);
        }
        Product::create([
            'name'=> $request->name,
            'category_name'=> $request->category_name,
            'brand_name'=> $request->brand_name,
            'description'=> $request->description,
            'image'=> $customName,
        ]);
        return back();
    }

}
