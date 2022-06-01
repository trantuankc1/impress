<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;

class AboutUsController extends Controller
{
    /**
     * @return View
     */
    public function aboutUs(): View
    {
        return view('user::users.aboutUs');
    }
}
