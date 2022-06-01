<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\User\Contracts\Services\CartService;
use Modules\User\Contracts\Services\ProductService;

class UserController extends Controller
{
    /**
     * @var ProductService
     */
    protected ProductService $productService;
    protected CartService  $cartService;

    /**
     * @param ProductService $productService
     * @param CartService $cartService
     */
    public function __construct(ProductService $productService, CartService $cartService)
    {
        $this->productService = $productService;
        $this->cartService = $cartService;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $listProduct = $this->productService->getDataProduct();

        return view('user::users.home', compact('listProduct'));
    }

    /**
     * Display a listing of the resource.
     * @param int $id
     * @return View
     */
    public function detailProduct(int $id): View
    {
        $detailProduct = $this->productService->product($id);

        return view('user::users.detailProduct', compact('detailProduct'));
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function addCart(int $id): RedirectResponse
    {
        $product = $this->productService->product($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image
            ];
        }
        session()->put('cart', $cart);

        return redirect()->route('user.enquiry');
    }


    public function enquiry()
    {
        $listProduct = Session::get('cart');

        if ($listProduct) {
            $totalPrice = 0;
            foreach ($listProduct as $product) {
                $totalPrice += ($product['price']* $product['quantity']);
            }
        }

        return view('user::users.enquiry', compact('listProduct', 'totalPrice'));
    }

    /**
     * @return Application|Factory|View
     */
    public function aboutUs()
    {
        return view('user::users.aboutUs');
    }

    /**
     * @return Application|Factory|View
     */
    public function project()
    {
        return view('user::users.project');
    }

    /**
     * @return Application|Factory|View
     */
    public function ourProduct()
    {
        return view('user::users.ourProduct');
    }

    /**
     * @return Application|Factory|View
     */
    public function contact()
    {
        return view('user::users.contact');
    }

    /**
     * @return Application|Factory|View
     */
    public function showLogin()
    {
        return view('user::users.login');
    }
}
