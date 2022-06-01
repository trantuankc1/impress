<?php

namespace Modules\Admin\Contracts\Services;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface CategoryService
{
    /**
     * @param Request $request
     * @return Category
     */
    public function save(Request $request): Category;

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
