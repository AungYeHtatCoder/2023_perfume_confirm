<?php

namespace App\Models\Admin;

use App\Models\Admin\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public $table = 'categories';

    protected $fillable = [
        'brand_category_name'
    ];



     public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}