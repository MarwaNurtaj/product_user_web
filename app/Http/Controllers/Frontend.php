<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Frontend extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view("welcome",compact("products"));
    }
    public function details($id){
        $product = Product::find($id);
        return view("detail",compact("product"));
    }
}
