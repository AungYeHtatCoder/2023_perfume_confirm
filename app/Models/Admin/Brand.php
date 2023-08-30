<?php

namespace App\Models\Admin;

use App\Models\Admin\Product;
use App\Models\Admin\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    public $table = 'brands';

    protected $fillable = [
        'brand_name',
        'category_id',
        'branch_logo',

    ];
    // public function categories()
    // {
    // return $this->hasMany(Category::class);
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);    
    }
}