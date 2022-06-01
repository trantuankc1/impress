<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use Illuminate\Pagination\LengthAwarePaginator;

interface ContactRepository
{
    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;

    /**
     * @return LengthAwarePaginator
     */
    public function getAllContact(): LengthAwarePaginator;

}
