<?php

namespace Modules\User\Http\Controllers\Auth;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
