<?php

namespace Modules\Admin\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Admin\Contracts\Services\UserService;
use Modules\Admin\Contracts\Repositories\Mysql\UserRepository;

class UserServiceImpl implements UserService
{
    /**
     * @var UserRepository
     */
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllUser(): LengthAwarePaginator
    {
        return $this->userRepository->getAllUser();
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $this->userRepository->destroy($id);
        // TODO: Implement destroy() method.
    }
}
