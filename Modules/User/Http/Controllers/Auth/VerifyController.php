<?php

namespace Modules\User\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Modules\User\Emails\MailCheckAccount;
use Modules\User\Emails\SuccessAccount;

class VerifyController extends Controller
{
    public function showVerify()
    {
        return view('user::users.auths.verify');
    }

    public function verify(int $id): RedirectResponse
    {
        $user = User::query()->findOrFail($id);
        $data = [
            'id' => $user->id,
            'name' => $user->name
        ];
        Mail::to($user->email)->send(new MailCheckAccount($data));

        return redirect()->route('user.login');
    }

    public function verifyAccount(int $id)
    {
        $user = User::query()->findOrFail($id);
        $user->email_verified_at = now();
        $user->remember_token = strtoupper(Str::random(20));
        $user->status = 1;
        $user->save();
        $data = [
            'name' => $user->name
        ];
        Mail::to($user->email)->send(new SuccessAccount($data));

        return redirect()->route('user.login');
    }
}
