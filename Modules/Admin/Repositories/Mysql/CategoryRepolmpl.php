<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;

class CategoryRepolmpl implements CategoryRepository
{

    /**
     * @param Category $category
     * @return Category
     */
    public function save(Category $category): Category
    {
        $category->save();

        return $category;
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        Category::destroy($id);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllCategory(): LengthAwarePaginator
    {
        return Category::query()->paginate(10);
    }
}
