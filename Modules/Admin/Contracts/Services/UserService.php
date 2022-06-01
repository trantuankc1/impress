<?php

namespace Modules\Admin\Contracts\Services;

use Illuminate\Pagination\LengthAwarePaginator;

interface UserService
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
