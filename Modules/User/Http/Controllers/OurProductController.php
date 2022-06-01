<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Modules\User\Contracts\Services\ProductService;

class OurProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * @return View
     */
    public function ourProduct(): View
    {
        $listProduct = $this->productService->getDataProduct();

        return view('user::users.ourProduct',compact('listProduct'));
    }
}
