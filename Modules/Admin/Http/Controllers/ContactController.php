<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\Admin\Contracts\Services\ContactService;

class ContactController extends Controller
{
    /**
     * @var ContactService
     */
    protected ContactService $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        $contact = $this->contactService->getAllContact();

        return view('admin::contact.home',[
            'contact' => $contact,
        ] );
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $this->contactService->destroy($id);

        return redirect()->route('listContact.index');
    }
}
