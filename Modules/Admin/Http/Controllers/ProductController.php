<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\Admin\Contracts\Services\ProductService;
use Modules\Admin\Http\Requests\StorePostRequest;

class ProductController extends Controller
{
    /**
     * @var ProductService
     */
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        $data = $this->productService->getAllProduct();
        return view('admin::product.all', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(): Renderable
    {
        $category = Category::all();
        return view('admin::product.add')->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     * @param StorePostRequest $request
     * @return RedirectResponse
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
       $this->productService->save($request);

      return redirect()->route('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(int $id): Renderable
    {
        $product = $this->productService->edit($id);

        return view('admin::product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     * @param StorePostRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StorePostRequest $request, int $id): RedirectResponse
    {
       $this->productService->update($request, $id);

       return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
       $this->productService->destroy($id);

       return redirect()->route('products.index');
    }
}
