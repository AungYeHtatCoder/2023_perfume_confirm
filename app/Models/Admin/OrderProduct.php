<?php

namespace App\Models\Admin;

use App\Models\Admin\Size;
use App\Models\Admin\Order;
use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id', 'product_id', 'size_id', 'qty', 'total_price'
    ];

    public function orders(){
        return $this->belongsTo(Order::class);
    }

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function sizes(){
        return $this->belongsTo(Size::class);
    }
}