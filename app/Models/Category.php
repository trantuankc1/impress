<?php

namespace App\Models;

use App\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Modules\Admin\Database\factories\UserFactory;

class Category extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'categories';

    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }
    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_category', 'product_id' ,'category_id');
    }

}
