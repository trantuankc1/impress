<?php

namespace Modules\User\Contracts\Repositories\Mysql;

use App\Models\Category;

interface CategoryRepository
{
    public function getCategoryProduct(Category $category);
}
