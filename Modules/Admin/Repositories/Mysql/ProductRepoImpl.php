<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;

class ProductRepoImpl implements ProductRepository
{

    /**
     * @param Products $product
     * @return Products
     */
    public function save(Products $product): Products
    {
        $product->save();

        return $product;
    }

    /**
     * @param Products $products
     * @return Products
     */
    public function update(Products $products): Products
    {
        $products->update();

        return $products;
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        Products::destroy($id);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllProduct(): LengthAwarePaginator
    {
       return Products::paginate(10);
    }

    /**
     * @param int $id
     * @return Products|null
     */
    public function findById(int $id): ?Products
    {
        return Products::query()->findOrFail($id);
    }

    /**
     * @param Category $category
     * @return Category
     */
    public function category(Category $category): Category
    {
        $category->save();

        return $category;
    }

}
