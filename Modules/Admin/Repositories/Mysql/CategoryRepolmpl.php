<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Products;
use http\Env\Request;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;

class CategoryRepolmpl implements CategoryRepository
{


    public function save(Products $product)
    {
        $product->save();

        return $product;
    }

    public function edit(int $id)
    {
        return Products::query()->findOrFail($id);
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function update(Products $products)
    {
        $products->update();

        return $products;
    }

    public function destroy(int $id)
    {
        return Products::destroy($id);
    }

    public function getAllProduct()
    {
        return Products::paginate(10);
    }

    public function findById(int $id)
    {
        return Products::query()->findOrFail($id);
    }

    public function getAllCategory()
    {
        // TODO: Implement getAllCategory() method.
    }
}
