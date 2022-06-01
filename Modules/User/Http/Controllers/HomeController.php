<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Modules\User\Contracts\Services\ProductService;

class HomeController extends Controller
{
    /**
     * @var ProductService
     */
    protected ProductService $productService;

    /**
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function home(): View
    {
        $listProduct = $this->productService->getDataProduct();

        return view('user::users.home', compact('listProduct'));
    }
}
