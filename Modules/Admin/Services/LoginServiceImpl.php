<?php

namespace Modules\Admin\Services;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Contracts\Services\LoginService;
use Modules\Admin\Http\Requests\LoginAdminRequest;

class LoginServiceImpl implements LoginService
{


    /**
     * @param LoginAdminRequest $request
     * @return RedirectResponse
     */
    public function login(LoginAdminRequest $request): RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.home');
        }
        else {
            return redirect()->back()->withInput();
        }

    }
}
