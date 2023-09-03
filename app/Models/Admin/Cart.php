<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id', 'user_id', 'size_id', 'qty', 'unit_price', 'total_price',
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }
}
