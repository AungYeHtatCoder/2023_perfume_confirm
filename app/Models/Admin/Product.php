<?php

namespace App\Models\Admin;

use App\Models\Admin\Brand;
use App\Models\Admin\Scent;
use App\Models\Admin\PerfumeSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'brand_id',
    'image',
    'description',
    'published',
    'feature',
    'popular',
    'user_id'
];


    public function scents()
    {
    return $this->belongsToMany(Scent::class);
    }

    public function sizes()
    {
    return $this->belongsToMany(Size::class)->withPivot(['qty', 'normal_price', 'discount_price']);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function order_products(){
        return $this->hasMany(OrderProduct::class);
    }

// public function perfumeSize()
// {
//     return $this->belongsTo(PerfumeSize::class);
// }

    // public function scent()
    // {
    //     return $this->belongsTo(Scent::class);
    // }


}