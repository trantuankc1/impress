<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use App\Models\Admin;

interface ListAdminRepository
{
    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;

    public function getAllAdmin();

}
