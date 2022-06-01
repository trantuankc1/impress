<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\OrderDetail;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
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
        return DB::table('order_details')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->select('products.name', 'order_details.unit_price', 'order_details.quantity', 'order_details.order_id', 'products.image', 'order_details.created_at', 'order_details.updated_at')
            ->where('order_id', $id)->get();
    }

    /**
     * @param int $id
     * @return Collection
     */
    public function findUser(int $id): Collection
    {
        return DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'orders.id')
            ->where('orders.id', $id)->get();
    }
}
