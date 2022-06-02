<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Admin\Contracts\Services\ContactService;

class ContactController extends Controller
{
    /**
     * @var ContactService
     */
    protected ContactService $contactService;

    /**
     * @param ContactService $contactService
     */
    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $contact = $this->contactService->getAllContact();

        return view('admin::contact.home', [
            'contact' => $contact,
        ]);
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $this->contactService->destroy($id);

        return redirect()->route('contacts.index');
    }
}
