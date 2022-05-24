<?php

namespace Modules\User\Http\Controllers\Auth;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\User\Contracts\Services\AuthService;

class VerifyController extends Controller
{
    /**
     * @var AuthService
     */
    protected AuthService $authService;

    /**
     * @param AuthService $authService
     */
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * @return Application|Factory|View
     */
    public function showVerify(): View
    {
        return view('user::users.auths.verify');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function verify(int $id): RedirectResponse
    {
        return  $this->authService->verify($id);
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function verifyAccount(int $id): RedirectResponse
    {
        return $this->authService->verifyAccount($id);
    }
}
