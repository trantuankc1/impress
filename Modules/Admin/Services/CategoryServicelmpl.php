<?php

namespace Modules\Admin\Services;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;
use Modules\Admin\Contracts\Services\CategoryService;
use Modules\Admin\Contracts\Services\ProductService;

class CategoryServicelmpl implements CategoryService
{
    protected CategoryRepository $categoryRepository;

    /**
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function save(Request $request)
    {
        $category = new Category();
        $category->name = $request->get('name');


        return $this->save($category);
    }

    public function edit(int $id)
    {
        return $this->categoryRepository->edit();
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
