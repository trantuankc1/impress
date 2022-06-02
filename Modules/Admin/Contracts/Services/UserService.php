<?php

namespace Modules\Admin\Contracts\Services;

use http\Env\Request;
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

    public function finId(int $id);

    public function destroy(int $id): void;

    public function update(int $id);

    public function active(int $id);

}
