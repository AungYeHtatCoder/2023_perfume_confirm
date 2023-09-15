<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'header',
        'paragraph',
        'one',
        'two'
    ];
}
