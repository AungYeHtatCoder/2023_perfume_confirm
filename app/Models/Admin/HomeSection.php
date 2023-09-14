<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'text_1',
        'text_2',
        'text_3',
        'status'
    ];
}
