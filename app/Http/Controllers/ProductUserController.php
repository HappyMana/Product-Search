<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\ProductUser;
use App\Http\Requests\ProductRequest;
use RakutenRws_Client;
use Illuminate\Support\Facades\Auth;

class ProductUserController extends Controller
{
    public function index() {
        $favoriteproducts = ProductUser::get();
        dd($favoriteproducts);
        return view("favorite", compact("favoriteproducts", "id"));
    }
    
    public function show(ProductUser $productuser) {
        return view("favoritedetail")->with(["favoriteproduct" => $productuser]);
    }
}
