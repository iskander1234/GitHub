<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainControler extends Controller
{
    public function home(){
        $products = Product::get();
        return view('home', compact('products'));
    }
    public function categories(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));

    }
    public function product($category,$product = null){
        return view('product', ['product' => $product]);
    }
}
