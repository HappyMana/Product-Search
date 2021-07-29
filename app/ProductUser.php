<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    protected $fillable = [
        "id", "product_id", "user_id"
    ];
}
