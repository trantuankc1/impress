<?php

namespace Modules\Api\Repositories\Mysql;

use Modules\Api\Contracts\Repositories\Mysql\UserRepository;
use Modules\Api\Entities\User;

class UserRepoImpl implements UserRepository
{
    /**
     * Save User to database
     *
     * @param User $user
     * @return User
     */
    public function save(User $user): User
    {
        $user->save();

        return $user;
    }

    /**
     * Get User by id
     *
     * @param int $userId
     * @return User|null|object
     */
    public function findById(int $userId): ?User
    {
        return User::query()
            ->find($userId);
    }
}
