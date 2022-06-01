<?php

namespace Modules\Admin\Services;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Admin\Contracts\Repositories\Mysql\OrderRepository;
use Modules\Admin\Contracts\Services\OrderService;

class OrderServicelmpl implements OrderService
{
    /**
     * @var OrderRepository
     */
    protected OrderRepository  $orderRepository;

    public function __construct(OrderRepository  $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
       $this->orderRepository->destroy($id);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllOrder(): LengthAwarePaginator
    {
        return $this->orderRepository->getAllOrder();
    }


}
