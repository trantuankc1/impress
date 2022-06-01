<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Api\Repositories\Auth;

class CheckLoginSupperAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if((auth()->guard('admin')->user()->role == 1))
        {
            return redirect($next);
        }
        return redirect('/admin');
    }
}
