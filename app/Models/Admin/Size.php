<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['qty', 'normal_price', 'discount_price']);
    }

    public function order_products(){
        return $this->hasMany(OrderProduct::class);
    }

    public function carts(){
        return $this->belongsToMany(Cart::class);
    }
}
