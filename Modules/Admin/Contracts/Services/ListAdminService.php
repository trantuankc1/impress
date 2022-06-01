<?php

namespace Modules\Admin\Contracts\Services;

use App\Models\Admin;

interface ListAdminService
{
    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;

    public function getAllAdmin();
}
