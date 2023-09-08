<?php

namespace App\Models\Admin;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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