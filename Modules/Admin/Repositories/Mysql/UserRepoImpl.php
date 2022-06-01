<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Admin\Contracts\Repositories\Mysql\UserRepository;

class UserRepoImpl implements UserRepository
{
    /**
     * @return LengthAwarePaginator
     */
    public function getAllUser(): LengthAwarePaginator
    {
        return User::query()->paginate();
        // TODO: Implement getAllUser() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id):void
    {
        User::destroy($id);
        // TODO: Implement destroy() method.
    }
}
