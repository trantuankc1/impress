<?php

namespace Modules\Admin\Contracts\Services;

interface ListAdminService
{
    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;

    public function getAllAdmin();
}
