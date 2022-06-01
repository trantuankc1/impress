<?php

namespace Modules\Admin\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Admin\Contracts\Repositories\Mysql\ContactRepository;
use Modules\Admin\Contracts\Services\ContactService;

class ContactServicelmpl implements ContactService
{
    /**
     * @var ContactRepository
     */
    protected ContactRepository $contactRepository;

    /**
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        if ($id)
        {
            $this->destroy($id);
        }

    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllContact(): LengthAwarePaginator
    {
        return $this->contactRepository->getAllContact();
    }

}
