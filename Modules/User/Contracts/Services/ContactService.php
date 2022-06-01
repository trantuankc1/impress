<?php

namespace Modules\User\Contracts\Services;

use Illuminate\Http\RedirectResponse;
use Modules\User\Http\Requests\ContactRequest;

interface ContactService
{
    /**
     * @param ContactRequest $request
     * @return RedirectResponse
     */
    public function addContact(ContactRequest $request): RedirectResponse;
}
