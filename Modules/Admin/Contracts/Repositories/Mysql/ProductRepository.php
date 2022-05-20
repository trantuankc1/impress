<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use App\Models\Products;
use http\Env\Request;

interface ProductRepository
{
    public function save(Products $product);

    public function edit();

    public function store();

    public function update();

    public function destroy();

}
