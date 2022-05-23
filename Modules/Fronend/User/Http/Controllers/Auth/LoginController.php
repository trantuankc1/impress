<?php

namespace Modules\User\Http\Controllers\Auth;

use Modules\User\Http\Requests\LoginUserRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @return Application|Factory|View
     */
    public function showLogin()
    {
        return view('user::users.auths.login');
    }

    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->email_verified_at === null) {
                $idUser = Auth::user()->id;
                Auth::logout();

                return view('user::users.auths.verify', compact('idUser'));
            }
            return redirect()->route('user.index');
        } else {
            return redirect()->back()->withInput();
        }
    }
}
