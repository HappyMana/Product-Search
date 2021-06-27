<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function home(){
        return view('layouts/top');
    }
    
    // public function result(){
    //     return view('layouts/result');
    // }
}
