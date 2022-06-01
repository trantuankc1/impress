<?php

namespace Modules\User\Repositories\Mysql;

use App\Models\Products;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\User\Contracts\Repositories\Mysql\ProductRepository;

class ProductRepoImpl implements ProductRepository
{
    /**
     * @param int $idProduct
     * @return Products|null
     */
    public function findById(int $idProduct): ?Products
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return Products::query()->findOrFail($idProduct);

        // TODO: Implement findById() method.
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getDataProduct(): LengthAwarePaginator
    {
        return Products::query()->paginate(4);
        // TODO: Implement getDataProduct() method.
    }
}
