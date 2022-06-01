<?php

namespace Modules\Admin\Services;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;
use Modules\Admin\Contracts\Services\ProductService;

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
     * @param Request $request
     * @return Products
     */
    public function save(Request $request): Products
    {
        $category = $request->get('category');
        if ($request->has('image'))
        {
            $filePath = $request['image']->storeAs('uploads', request('image')->getClientOriginalName(), 'public');
        }
        $product = new Products();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->content = $request->get('content');
        $product->description = $request->get('description');
        $product->image = $filePath;
        $data = $this->productRepository->save($product);

        $data->category()->attach($category);

         return $data;
    }

    /**
     * @param int $id
     * @return Products|null
     */
    public function edit(int $id): ?Products
    {
        return $this->productRepository->findById($id);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Products
     */
    public function update(Request $request, int $id): Products
    {
        $product = $this->productRepository->findById($id);
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->content = $request->get('content');
        $product->description = $request->get('description');
        if (!$request->hasFile('image')) {
            return $this->productRepository->update($product);
        }else{
            $filePath = $request['image']->storeAs('uploads', request('image')->getClientOriginalName(), 'public');
            $product->image = $filePath;
        }

        return $this->productRepository->update($product);
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id):void
    {
        $this->productRepository->destroy($id);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllProduct(): LengthAwarePaginator
    {
        return $this->productRepository->getAllProduct();
    }

    /**
     * @param Request $request
     * @return Category
     */
    public function category(Request $request): Category
    {
        $category = new Category();
        $category->category = $request->get('category');

        return $this->productRepository->category($category);
    }
}
