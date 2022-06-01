<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CategoryRepository
{

    /**
     * @param Category $category
     * @return Category
     */
    public function save(Category $category): Category;

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;

    /**
     * @return LengthAwarePaginator
     */
    public function getAllCategory(): LengthAwarePaginator;



}
