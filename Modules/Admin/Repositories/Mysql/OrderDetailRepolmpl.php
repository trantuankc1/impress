<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Collection;
use Modules\Admin\Contracts\Repositories\Mysql\OrderDetailRepository;

class OrderDetailRepolmpl implements OrderDetailRepository
{
    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        OrderDetail::destroy($id);
    }

    /**
     * @param int $id
     * @return Collection
     */
    public function getOrderDetail(int $id): Collection
    {
        return OrderDetail::with('order')->where('order_id', $id)->get();
    }

    /**
     * @param int $id
     * @return Collection
     */
    public function findUser(int $id): Collection
    {
        return Order::with('user')->where('id', $id)->get();
    }

}
