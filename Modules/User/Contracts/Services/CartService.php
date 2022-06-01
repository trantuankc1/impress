<?php

namespace Modules\User\Contracts\Services;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

interface CartService
{
    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function addCart(int $id): RedirectResponse;

    public function updateCart(Request $request);

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function deleteCart(int $id): RedirectResponse;

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function buyProduct(Request $request): RedirectResponse;

    public function orderConfirmed(int $orderId);
}
