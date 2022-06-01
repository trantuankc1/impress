<?php

namespace Modules\Admin\Contracts\Services;

use Illuminate\Support\Collection;

interface OrderDetailService
{
    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;

    /**
     * @param int $id
     * @return Collection
     */
    public function getOrderDetail(int $id): Collection;

    /**
     * @param int $id
     * @return Collection
     */
    public function findUser(int $id): Collection;

}
