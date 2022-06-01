<?php

namespace Modules\User\Repositories\Mysql;

use App\Models\Contact;
use Modules\User\Contracts\Repositories\Mysql\ContactRepository;

class ContactRepoImpl implements ContactRepository
{
    /**
     * @param Contact $contact
     * @return Contact
     */
    public function addContact(Contact $contact): Contact
    {
        $contact->save();

        return $contact;
        // TODO: Implement addContact() method.
    }
}
