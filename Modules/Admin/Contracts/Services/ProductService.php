<?php

namespace Modules\Admin\Contracts\Services;

use Illuminate\Http\Request;

interface ProductService
{
    public function save(Request $request);

    public function edit();

    public function store();

    public function update();

    public function destroy(int $id);

    public function getAllProduct();
}
