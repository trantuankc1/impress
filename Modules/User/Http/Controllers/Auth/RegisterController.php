<?php

namespace Modules\User\Http\Controllers\Auth;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Modules\User\Contracts\Services\AuthService;
use Modules\User\Http\Requests\RegisterUserRequest;

class RegisterController extends Controller
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
        $this->middleware('guest');
        $this->authService = $authService;
    }

    /**
     * @return Application|Factory|View
     */
    public function showRegister()
    {
        return view('user::users.auths.register');
    }

    /**
     * @param RegisterUserRequest $request
     * @return Application|Factory|View
     */
    public function register(RegisterUserRequest $request)
    {
        $user = $this->authService->register($request);
        $idUser = $user->id;

        return view('user::users.auths.verify',compact('idUser'));
    }
}
