<?php

namespace Modules\User\Contracts\Services;

use App\Models\Products;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ProductService
{
    /**
     * @return LengthAwarePaginator
     */
    public function getDataProduct():LengthAwarePaginator;

    /**
     * @param int $id
     * @return Products|null
     */
    public function product(int $id): ?Products;
}
