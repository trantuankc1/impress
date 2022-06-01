<?php

namespace Modules\User\Contracts\Repositories\Mysql;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Products;
use App\Models\User;

interface CartRepository
{
    /**
     * Get User by id
     *
     * @param int $idUser
     * @return Order|null
     */
    public function findByIdUser(int $idUser): ?User;

    /**
     * Get User by id
     *
     * @param int $idProduct
     * @return Products|null
     */
    public function findByIdProduct(int $idProduct): ?Products;

    /**
     * Get User by id
     *
     * @param int $orderId
     * @return Order|null
     */
    public function findByIdOrder(int $orderId): ?Order;

    /**
     * @param Order $order
     * @return Order
     */
    public function addOrder(Order $order): Order;

    /**
     * @param OrderDetail $orderDetail
     * @return OrderDetail
     */
    public function addOrderDetail(OrderDetail $orderDetail): OrderDetail;
}
