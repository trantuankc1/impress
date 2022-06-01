<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Pagination\LengthAwarePaginator;

interface ProductRepository
{
    /**
     * @param int $id
     * @return Products|null
     */
    public function findById(int $id): ?Products;

    /**
     * @param Products $product
     * @return Products
     */
    public function save(Products $product): Products;

    /**
     * @param Products $products
     * @return Products|null
     */
    public function update(Products $products): ?Products;

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
     * @param Category $category
     * @return Category
     */
    public function category(Category $category): Category;

}
