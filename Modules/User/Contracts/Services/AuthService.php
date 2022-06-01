<?php

namespace Modules\User\Contracts\Services;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Modules\User\Http\Requests\LoginUserRequest;
use Modules\User\Http\Requests\RegisterUserRequest;

interface AuthService
{
    /**
     * @param LoginUserRequest $request
     */
    public function login(LoginUserRequest $request);

    /**
     * @param RegisterUserRequest $request
     * @return User
     */
    public function register(RegisterUserRequest $request): User;

    /**
     * @param RegisterUserRequest $request
     * @return User
     */
    public function create(RegisterUserRequest $request): User;

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function verify(int $id): RedirectResponse;

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function verifyAccount(int $id): RedirectResponse;
}
