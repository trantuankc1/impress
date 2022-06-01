<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\User\Contracts\Services\CartService;

class EnquiryController extends Controller
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
     * @return View
     */
    public function enquiry(): View
    {
        return view('user::users.enquiry');
    }
}
