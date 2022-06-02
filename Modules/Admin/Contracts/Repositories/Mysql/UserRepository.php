<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
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

    public function finId(int $id);

    public function update(int $id);

    public function active(int $id);

}
