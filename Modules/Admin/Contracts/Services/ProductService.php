<?php

namespace Modules\Admin\Contracts\Services;

use Cassandra\Collection;
use Illuminate\Http\Request;

interface ProductService
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function save(Request $request);

    public function edit(int $id);

    public function store();

    public function update(Request $request, int $id);

    public function destroy(int $id);

    public function getAllProduct();
}
