<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public  $fillable = [
        'name',
        'price',
        'content',
        'description',
        'image'
    ];
    use HasFactory;
}
