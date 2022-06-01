<?php

namespace Modules\Admin\Services;


use App\Models\Admin;
use Modules\Admin\Contracts\Repositories\Mysql\ListAdminRepository;
use Modules\Admin\Contracts\Services\ListAdminService;

class ListAdminServicelmpl implements ListAdminService
{
    protected ListAdminRepository $listAdminRepository;

    public function __construct(ListAdminRepository $listAdminRepository)
    {
        $this->listAdminRepository = $listAdminRepository;
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }

    public function getAllAdmin()
    {
        return $this->listAdminRepository->getAllAdmin();
    }
}
