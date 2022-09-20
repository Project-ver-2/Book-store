<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(Request $request){
        $c = $request->get('c');
        $search = $request->get('search');
        $categories = Category::all();
        $authors  = Author::all();
        $products = Product::where('name','like','%'.$search.'%')
            ->where('product_category_id',$c)
            ->paginate(5);
        return view('front.shop.index',compact('categories','authors','products'));
    }

}
