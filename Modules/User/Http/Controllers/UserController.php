<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('user::users.home');
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

    /**
     * @return Application|Factory|View
     */
    public function showLogin()
    {
        return view('user::users.login');
    }
}
