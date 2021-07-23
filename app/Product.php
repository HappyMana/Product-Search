<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
        
    }
    
    public function page()
    {
        return $this->orderBy('id', 'DESC')->paginate(10);
    }
}
