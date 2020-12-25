<?php

namespace Modules\Api\Contracts\Repositories\Mysql;

use Modules\Api\Entities\User;

interface UserRepository
{
    /**
     * Save User to database
     *
     * @param User $user
     * @return User
     */
    public function save(User $user): User;

    /**
     * Get User by id
     *
     * @param int $userId
     * @return User|null|object
     */
    public function findById(int $userId): ?User;
}
