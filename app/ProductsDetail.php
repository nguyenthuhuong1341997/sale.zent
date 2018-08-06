<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsDetail extends Model
{
   protected $fillable = [
        'id','product_id', 'size_id', 'color_id','quantity','image'
    ];

    public function product()
    {
        return $this->belongsTo('App\ProductsDetail');
    }
}
