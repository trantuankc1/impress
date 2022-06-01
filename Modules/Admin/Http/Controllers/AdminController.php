<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckLogoutAdmin');
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin::index');
    }
}
