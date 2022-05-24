<?php

namespace Modules\Admin\Services;

use App\Models\Products;
use Illuminate\Http\Request;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;
use Modules\Admin\Contracts\Services\ProductService;

class ProductServiceImpl implements ProductService
{
    protected ProductRepository $productRepository;

    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
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

    public function edit(int $id)
    {
        return $this->productRepository->findById($id);
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function update(Request $request, int $id)
    {
        $product = $this->productRepository->findById($id);
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->content = $request->get('content');
        $product->description = $request->get('description');
        $product->image = $request->file('image')->store('image');

        return $this->productRepository->update($product, $id);
    }

    public function destroy(int $id)
    {
        return $this->productRepository->destroy($id);
    }


    public function getAllProduct()
    {
        return $this->productRepository->getAllProduct();
    }
}
