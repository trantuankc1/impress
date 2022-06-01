<?php

namespace Modules\User\Services;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Modules\User\Contracts\Repositories\Mysql\ContactRepository;
use Modules\User\Contracts\Services\ContactService;
use Modules\User\Emails\CheckContact;
use Modules\User\Http\Requests\ContactRequest;

class ContactServiceImpl implements ContactService
{
    /**
     * @var ContactRepository
     */
    protected ContactRepository  $contactRepository;

    /**
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository =  $contactRepository;
    }

    /**
     * @param ContactRequest $request
     * @return RedirectResponse
     */
    public function addContact(ContactRequest $request): RedirectResponse
    {
        $contact = new Contact();
        $contact->first_name = $request->input('firstName');
        $contact->last_name = $request->input('lastName');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->request_detail = $request->input('requestDetail');
        $contact->status = 1;
        $this->contactRepository->addContact($contact);
        $data = [
            'name'=> "$contact->last_name" . " $contact->first_name",
            'email'=> $contact->email,
            'requestDetail' => $contact->request_detail
        ];
        $emailAdmin = 'trongtu1006@gmail.com';
        Mail::to($emailAdmin)->send(new CheckContact($data));

        return redirect()->back();
        // TODO: Implement addContact() method.
    }
}
