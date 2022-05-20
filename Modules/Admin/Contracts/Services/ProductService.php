<?php

namespace Modules\Admin\Contracts\Services;

use App\Models\Products;
use http\Env\Request;

interface ProductService
{
    public function create(Request $request);

    public function edit();

    public function store();

    public function update();

    public function destroy();
}
