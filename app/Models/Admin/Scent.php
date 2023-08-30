<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scent extends Model
{
    use HasFactory;

    protected $fillable = [
        'scent_name',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
