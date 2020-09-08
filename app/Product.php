<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category','category_id','category_id');
    }

    // public function productImages()
    // {
    //     return $this->hasMany('App\productImage', 'foreign_key', 'local_key');
    // }
}