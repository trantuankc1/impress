<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\Admin\Contracts\Services\LoginService;
use Modules\Admin\Http\Requests\LoginAdminRequest;

class LoginAdminController extends Controller
{
    /**
     * @var LoginService
     */
    public LoginService $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function showLogin()
    {
        return view('admin::auths.login');
    }

    /**
     * @param LoginAdminRequest $request
     * @return RedirectResponse
     */
    public function login(LoginAdminRequest $request): RedirectResponse
    {
        return $this->loginService->login($request);
    }
}
