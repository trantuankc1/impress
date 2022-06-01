<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Modules\Admin\Database\factories\UserFactory;

class Products extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'products';

//    protected $fillable = [
//        'name',
//        'price',
//        'content',
//        'password',
//        'description',
//        'image',
//        'type_product',
//        'status'
//    ];

    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id' ,'category_id');
    }
}
