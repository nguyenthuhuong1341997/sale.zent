<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'code', 'original_price','price','description','vendor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vendor()
    {
        return $this->belongsTo('App\Vendor', 'vendor_id');
    }
    public function product_details()
    {
        return $this->hasMany('App\ProductDetail');
    }
}
