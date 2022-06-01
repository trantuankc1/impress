<?php

namespace Modules\User\Contracts\Repositories\Mysql;

use App\Models\Contact;

interface ContactRepository
{
    /**
     * @param Contact $contact
     * @return Contact
     */
    public function addContact(Contact $contact): Contact;
}
