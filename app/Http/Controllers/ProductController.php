<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests\PostRequest;

class ProductController extends Controller
{
    public function home(){
        $products = Product::all();
        return view('layouts/top')->with(['products' => $products]);
    }
    
    public function search(){
        return view('layouts/search');
    }
    
    public function result(){
        return view('layouts/result');
    }
    
    public function rakutensearch(){
        return view('layouts/rakutensearch');
    }
}
