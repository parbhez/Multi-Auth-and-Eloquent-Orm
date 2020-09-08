<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product', 'foreign_key', 'other_key');
    }

}