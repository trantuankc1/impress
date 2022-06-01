<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use Illuminate\Pagination\LengthAwarePaginator;

interface UserRepository
{
    /**
     * @return LengthAwarePaginator
     */
    public function getAllUser(): LengthAwarePaginator;

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;


}
