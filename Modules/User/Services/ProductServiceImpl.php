<?php

namespace Modules\User\Services;

use App\Models\Products;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\User\Contracts\Repositories\Mysql\ProductRepository;
use Modules\User\Contracts\Services\ProductService;

class ProductServiceImpl implements ProductService
{
    /**
     * @var ProductRepository
     */
    protected ProductRepository $productRepository;

    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getDataProduct(): LengthAwarePaginator
    {
        return $this->productRepository->getDataProduct();
        // TODO: Implement getDataProduct() method.
    }

    /**
     * @param int $id
     * @return Products|null
     */
    public function product(int $id): ?Products
    {
        return $this->productRepository->findById($id);
        // TODO: Implement product() method.
    }
}
