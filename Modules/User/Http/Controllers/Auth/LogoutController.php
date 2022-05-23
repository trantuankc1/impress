<?php

namespace Modules\User\Http\Controllers\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * @return RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('user.index');
    }
}
