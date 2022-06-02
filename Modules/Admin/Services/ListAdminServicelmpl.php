<?php

namespace Modules\Admin\Services;


use Modules\Admin\Contracts\Repositories\Mysql\ListAdminRepository;
use Modules\Admin\Contracts\Services\ListAdminService;

class ListAdminServicelmpl implements ListAdminService
{
    /**
     * @var ListAdminRepository
     */
    protected ListAdminRepository $listAdminRepository;

    /**
     * @param ListAdminRepository $listAdminRepository
     */
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
