<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Admin\Contracts\Services\ListAdminService;

class ListAdminController extends Controller
{
    protected ListAdminService $listAdminService;

    public function __construct(ListAdminService $listAdminService)
    {
        $this->listAdminService = $listAdminService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $list = $this->listAdminService->getAllAdmin();
        return view('admin::admin.home', [
            'list' => $list
        ]);
    }

}