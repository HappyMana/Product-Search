<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductUser extends Model
{
    protected $fillable = [
        "id", "product_id", "user_id"
    ];
    
    public function favoriteProductID($item_code) {
        $user_id = Auth::id();
        $favorited_product_id = DB::table('product_users')
                        ->join('users', 'users.id', '=', 'product_users.user_id')
                        ->join('products', 'products.id', '=', 'product_users.product_id')
                        ->select('product_users.id')
                        ->where('products.itemCode', '=', $item_code)
                        ->where('product_users.user_id', $user_id)
                        ->groupBy('product_users.id')
                        ->get();
        return $favorited_product_id;
    }
}
