<?php

namespace Modules\Admin\Repositories\Mysql;

use Illuminate\Database\Eloquent\Collection;
use Modules\Admin\Contracts\Repositories\Mysql\ListAdminRepository;
Use App\Models\Admin;

class ListAdminRepolmpl implements ListAdminRepository
{
    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }

    /**
     * @return Admin[]|Collection
     */
    public function getAllAdmin()
    {
        return Admin::all();
    }
}
