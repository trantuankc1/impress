<?php

namespace Modules\Admin\Contracts\Services;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface ProductService
{
    /**
     * @param Request $request
     * @return Products
     */
    public function save(Request $request): Products;

    /**
     * @param int $id
     * @return Products|null
     */
    public function edit(int $id): ?Products;

    /**
     * @param Request $request
     * @param int $id
     * @return Products
     */
    public function update(Request $request, int $id): Products;

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;

    /**
     * @return LengthAwarePaginator
     */
    public function getAllProduct(): LengthAwarePaginator;

    /**
     * @param Request $request
     * @return Category
     */
    public function category(Request $request): Category;
}
