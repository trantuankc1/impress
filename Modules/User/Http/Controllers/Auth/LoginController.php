<?php

namespace Modules\User\Http\Controllers\Auth;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Modules\User\Contracts\Services\AuthService;
use Modules\User\Http\Requests\LoginUserRequest;

class LoginController extends Controller
{
    /**
     * @var AuthService
     */
    public AuthService $authService;

    /**
     * @param AuthService $authService
     */
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
        $this->middleware('guest');
    }

    /**
     * @return Application|Factory|View
     */
    public function showLogin(): View
    {
        return view('user::users.auths.login');
    }

    /**
     * @param LoginUserRequest $request
     * @return mixed
     */
    public function login(LoginUserRequest $request)
    {
        return $this->authService->login($request);
    }
}
