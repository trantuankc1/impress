<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Products extends Model
{
    use HasFactory;
    use Notifiable;
    public $timestamps = false;
    protected $table = 'products';
    public  $fillable = [
        'name',
        'price',
        'content',
        'description',
        'image'
    ];

    use HasFactory;

}
