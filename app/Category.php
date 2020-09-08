<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        //ModelName = Product, 
        //category table r primary_key(like as id) ta products table e foreign_key(like as cat_id) hesave je name use korcen seta diven r local_key mane primary key.
        // foreign_key , local_key use na korle o hoy tobe use kora valo query te data aste pvlm hoy naa.
        return $this->hasMany('App\Product','category_id','category_id');
    }
}