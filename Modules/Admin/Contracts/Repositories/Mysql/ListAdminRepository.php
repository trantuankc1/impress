<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

interface ListAdminRepository
{
    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;

    public function getAllAdmin();

}
