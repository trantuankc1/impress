<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\User\Contracts\Services\CartService;

class OrderProductController extends Controller
{
    /**
     * @var CartService
     */
    protected CartService $cartService;

    /**
     * @param CartService $cartService
     */
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function addCart(int $id): RedirectResponse
    {
        return $this->cartService->addCart($id);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function updateCart(Request $request)
    {
        return $this->cartService->updateCart($request);
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function deleteCart(int $id): RedirectResponse
    {
        return $this->cartService->deleteCart($id);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function buyProduct(Request $request): RedirectResponse
    {
        return $this->cartService->buyProduct($request);
    }

    /**
     * @param int $orderId
     * @return RedirectResponse
     */
    public function orderConfirmed(int $orderId): RedirectResponse
    {
        return $this->cartService->orderConfirmed($orderId);
    }
}
