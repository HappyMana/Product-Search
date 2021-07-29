<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["id", "itemName", "catchcopy", "itemCode", "itemPrice",
                            "itemCaption", "reviewCount", "reviewAverage", "itemUrl",
                            "mediumImageUrl1", "mediumImageUrl2", "mediumImageUrl3", "shopName", "shopUrl"];
    public function users()
    {
        return $this->belongsToMany('App\User');
        
    }
    
    public function page()
    {
        return $this->orderBy('id', 'DESC')->paginate(10);
    }
}
