<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\User\Contracts\Services\ProductService;

class DetailProductController extends Controller
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
     * @param int $id
     * @return View
     */
    public function detail(int $id): View
    {
        $detailProduct = $this->productService->product($id);

        return view('user::users.detailProduct', compact('detailProduct'));
    }
}
