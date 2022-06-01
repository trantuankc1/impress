<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{
    /**
     * @return View
     */
    public function project(): View
    {
        return view('user::users.project');
    }
}
