<?php

namespace Modules\User\Services;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Modules\User\Contracts\Repositories\Mysql\AuthRepository;
use Modules\User\Contracts\Services\AuthService;
use Modules\User\Emails\MailCheckAccount;
use Modules\User\Emails\SuccessAccount;
use Modules\User\Http\Requests\LoginUserRequest;
use Modules\User\Http\Requests\RegisterUserRequest;

class AuthServiceImpl implements AuthService
{
    /**
     * @var AuthRepository
     */
    private AuthRepository $authRepository;

    /**
     * @param AuthRepository $authRepository
     */
    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    /**
     * @param LoginUserRequest $request
     * @return Application|Factory|View|RedirectResponse
     */
    public function login(LoginUserRequest $request): RedirectResponse
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
        // TODO: Implement login() method.
    }

    /**
     * @param RegisterUserRequest $request
     * @return User
     */
    public function register(RegisterUserRequest $request): User
    {
        return $this->create($request);
        // TODO: Implement register() method.
    }

    /**
     * @param RegisterUserRequest $request
     * @return User
     */
    public function create(RegisterUserRequest $request): User
    {
        if ($request->input('password') === $request->input('password_confirmation')) {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $this->authRepository->save($user);
        }

        return $user;
        // TODO: Implement create() method.
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function verify(int $id): RedirectResponse
    {
        $user = $this->authRepository->findById($id);
        $data = [
            'id' => $user->id,
            'name' => $user->name
        ];
        Mail::to($user->email)->send(new MailCheckAccount($data));

        return redirect()->route('user.login');
        // TODO: Implement verify() method.
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function verifyAccount(int $id): RedirectResponse
    {
        $user = $this->authRepository->findById($id);
        $user->email_verified_at = now();
        $user->remember_token = strtoupper(Str::random(20));
        $user->status = 1;
        $this->authRepository->save($user);
        $data = [
            'name' => $user->name
        ];
        Mail::to($user->email)->send(new SuccessAccount($data));

        return redirect()->route('user.login');
//         TODO: Implement verifyAccount() method.
    }
}
