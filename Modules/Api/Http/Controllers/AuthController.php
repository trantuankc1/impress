<?php

namespace Modules\Api\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Api\Contracts\Services\AuthService;
use Modules\Api\Http\Requests\AuthLoginRequest;
use Modules\Api\Repositories\Parameters\AuthLoginParam;
use Modules\Api\Transformers\AuthResource;
use Modules\Api\Transformers\SuccessResource;

class AuthController extends Controller
{
    /** @var AuthService */
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(AuthLoginRequest $request): AuthResource
    {
        $params = new AuthLoginParam($request->input('email'), $request->input('password'));
        $auth = $this->authService->login($params);

        return AuthResource::make($auth);
    }

    public function testAuth(): SuccessResource
    {
        return new SuccessResource();
    }
}
