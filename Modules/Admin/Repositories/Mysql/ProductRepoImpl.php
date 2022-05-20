<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Products;
use http\Env\Request;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;

class ProductRepoImpl implements ProductRepository
{

    public function create(Products $product)
    {
        $product->save();
        return $product;
    }

    public function edit()
    {
        // TODO: Implement edit() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }
}
