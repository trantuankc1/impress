<?php

namespace Modules\User\Contracts\Repositories\Mysql;

use App\Models\Products;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ProductRepository
{
    /**
     * Get User by id
     *
     * @param int $idProduct
     * @return Products|null
     */
    public function findById(int $idProduct): ?Products;

    /**
     * @return LengthAwarePaginator
     */
    public function getDataProduct(): LengthAwarePaginator;
}
