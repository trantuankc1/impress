<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use App\Models\Products;

interface CategoryRepository
{
    public function findById(int $id);

    public function save(Products $product);

    public function edit(int $id);

    public function store();

    public function update(Products $products);

    public function destroy(int $id);

    public function getAllCategory();

}
