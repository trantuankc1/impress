<?php

namespace Modules\Admin\Services;

use App\Models\Products;
use Illuminate\Http\Request;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;
use Modules\Admin\Contracts\Services\ProductService;

class ProductServiceImpl implements ProductService
{
    protected ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function save(Request $request)
    {
        $product = new Products();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->content = $request->get('content');
        $product->description = $request->get('description');
        $product->image = $request->file('image')->store('image');

        return $this->productRepository->save($product);
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

    public function destroy(int $id)
    {
        $product = $this->productRepository;
    }

    public function getAllProduct()
    {
        return $this->productRepository->getAllProduct();
    }
}
