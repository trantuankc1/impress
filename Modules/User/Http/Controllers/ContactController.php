<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\User\Contracts\Services\ContactService;
use Modules\User\Http\Requests\ContactRequest;

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
    public function contact(): View
    {
        return view('user::users.contact');
    }

    /**
     * @param ContactRequest $request
     * @return RedirectResponse
     */
    public function addContact(ContactRequest $request): RedirectResponse
    {
        return $this->contactService->addContact($request);
    }
}
