<?php

namespace Modules\Admin\Services;

use App\Models\Products;
use http\Env\Request;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;
use Modules\Admin\Contracts\Services\ProductService;

class ProductServiceImpl implements ProductService
{
    private ProductRepository $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function create(Request $request)
    {
        $product = new Products();
        $product->name_product = $request->get('name_product');
        dd();
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
