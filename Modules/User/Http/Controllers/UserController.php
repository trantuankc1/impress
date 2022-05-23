<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Modules\User\Contracts\Services\UserService;
use App\Models\Products;

class UserController extends Controller
{

    public function index()
    {
        $data = Products::query()->get();
        return view('user::users.home', [
            'data' => $data
        ]);
    }
    public function outProduct()
    {
        $data = Products::query()->get();
        return view('user::users.ourProduct', [
            'data' => $data
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function aboutUs()
    {
        return view('user::users.aboutUs');
    }

    /**
     * @return Application|Factory|View
     */
    public function project()
    {
        return view('user::users.project');
    }

    /**
     * @return Application|Factory|View
     */
    public function ourProduct()
    {
        return view('user::users.ourProduct');
    }

    /**
     * @return Application|Factory|View
     */
    public function detailProduct()
    {
        return view('user::users.detailProducts');
    }

    /**
     * @return Application|Factory|View
     */
    public function contact()
    {
        return view('user::users.contact');
    }

    public function enquiry()
    {
        return view('user::users.enquiry');
    }

    /**
     * @return Application|Factory|View
     */
    public function showLogin()
    {
        return view('user::users.login');
    }
}
