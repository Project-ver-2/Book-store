<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        $authors  = Author::limit(4)->get();
        $products = Product::all();
        return view('front.index',compact('categories','authors','products'));
    }
}
