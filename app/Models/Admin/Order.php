<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Admin\OrderProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'sub_total', 'payment_method', 'payment_photo', 'order_note', 'status'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order_products(){
        return $this->hasMany(OrderProduct::class);
    }

    public function products()
{
    return $this->belongsToMany('App\Models\Admin\Product', 'order_products')
                ->withPivot('size_id', 'qty', 'total_price');
}

}