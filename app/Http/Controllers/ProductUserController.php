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
use Illuminate\Support\Facades\DB;

class ProductUserController extends Controller
{
    public function index() {
        $user_id = Auth::id();
        $favorite_products = DB::table('product_users')
                        ->join('users', 'users.id', '=', 'product_users.user_id')
                        ->join('products', 'products.id', '=', 'product_users.product_id')
                        ->select('products.*', 'product_users.*')
                        ->where('product_users.user_id', $user_id)
                        ->get();

        return view("favorite")->with(["favorite_products" => $favorite_products]);
    }
    
    public function show(int $product_user_id, ProductUser $productuser, Product $product) {
        $product_id = ProductUser::find($product_user_id)["product_id"];
        $favorite_product = Product::find($product_id);
        return view("favoritedetail", compact("favorite_product", "product_user_id"));
    }

    public function store(int $key, Product $product, User $user, ProductUser $productuser)
    {
        if (Auth::check()) {
            $items = session("items", array());
            $product->fill($items[$key])->save();
            $productuser->product_id=$product->id;
            $id = Auth::id();
            $productuser->user_id=$id;
            $productuser->save();

            return redirect("/search/result/" . $key);
        } 

        return redirect("/home");
    }
    
    public function delete(int $id) {
        $productuser = ProductUser::find($id);
        $productuser->delete();
        return redirect('/home/favorite');
    }
}
