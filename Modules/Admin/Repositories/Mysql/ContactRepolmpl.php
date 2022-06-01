<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Contact;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Admin\Contracts\Repositories\Mysql\ContactRepository;

class ContactRepolmpl implements ContactRepository
{
    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        Contact::destroy($id);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllContact(): LengthAwarePaginator
    {
        return Contact::query()->paginate(10);
    }
}
