<?php

namespace Modules\User\Repositories\Mysql;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Products;
use App\Models\User;
use Modules\User\Contracts\Repositories\Mysql\CartRepository;

class CartRepoImpl implements CartRepository
{

    /**
     * @param int $idProduct
     * @return Products|null
     */
    public function findByIdProduct(int $idProduct): ?Products
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return  Products::query()->findOrFail($idProduct);
        // TODO: Implement findById() method.
    }

    /**
     * @param int $orderId
     * @return Order|null
     */
    public function findByIdOrder(int $orderId): ?Order
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return  Order::query()->findOrFail($orderId);
        // TODO: Implement findByIdOrder() method.
    }

    /**
     * @param Order $order
     * @return Order
     */
    public function addOrder(Order $order): Order
    {
        $order->save();

        return $order;
        // TODO: Implement addOrder() method.
    }

    /**
     * @param OrderDetail $orderDetail
     * @return OrderDetail
     */
    public function addOrderDetail(OrderDetail $orderDetail): OrderDetail
    {
        $orderDetail->save();

        return $orderDetail;
        // TODO: Implement addOrderDetail() method.
    }

    public function findByIdUser(int $idUser): ?User
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return  User::query()->findOrFail($idUser);
        // TODO: Implement findByIdUser() method.
    }
}
