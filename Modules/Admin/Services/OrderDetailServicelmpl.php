<?php

namespace Modules\Admin\Services;

use Illuminate\Support\Collection;
use Modules\Admin\Contracts\Repositories\Mysql\OrderDetailRepository;
use Modules\Admin\Contracts\Services\OrderDetailService;

class OrderDetailServicelmpl implements OrderDetailService
{
    /**
     * @var OrderDetailRepository
     */
    protected OrderDetailRepository $orderDetailRepository;

    /**
     * @param OrderDetailRepository $orderDetailRepository
     */
    public function __construct(OrderDetailRepository $orderDetailRepository)
    {
        $this->orderDetailRepository = $orderDetailRepository;
    }


    /**
     * @param int $id
     * @return Collection
     */
    public function getOrderDetail(int $id): Collection
    {
        return $this->orderDetailRepository->getOrderDetail($id);
    }

    /**
     * @param int $id
     * @return Collection
     */
    public function findUser(int $id): Collection
    {
        return $this->orderDetailRepository->findUser($id);
    }
}
