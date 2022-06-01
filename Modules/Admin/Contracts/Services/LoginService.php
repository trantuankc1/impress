<?php

namespace Modules\Admin\Contracts\Services;


use Illuminate\Http\RedirectResponse;
use Modules\Admin\Http\Requests\LoginAdminRequest;

interface LoginService
{
    /**
     * @param LoginAdminRequest $request
     * @return RedirectResponse
     */
    public function login(LoginAdminRequest $request): RedirectResponse;

}
