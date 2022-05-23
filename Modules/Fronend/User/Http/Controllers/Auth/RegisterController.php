<?php

namespace Modules\User\Http\Controllers\Auth;

use Modules\User\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('user::users.auths.register');
    }

    public function register(RegisterUserRequest $request)
    {
        $user = $this->create($request);
        $idUser = $user->id;

        return view('user::users.auths.verify',compact('idUser'));
    }

    public function create(RegisterUserRequest $request)
    {
        if ($request->input('password') === $request->input('password_confirmation')) {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->save();
        }

        return $user;
    }
}
