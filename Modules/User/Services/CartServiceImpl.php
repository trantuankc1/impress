<?php

namespace Modules\User\Services;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Modules\User\Contracts\Repositories\Mysql\CartRepository;
use Modules\User\Contracts\Services\CartService;
use Modules\User\Emails\OrderConfirmed;
use Modules\User\Emails\SuccessOrderConfirmed;

class  CartServiceImpl implements CartService
{
    /**
     * @var CartRepository
     */
    protected CartRepository $cartRepository;

    /**
     * @param CartRepository $cartRepository
     */
    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function addCart(int $id): RedirectResponse
    {
        $product = $this->cartRepository->findByIdProduct($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image
            ];
        }
        session()->put('cart', $cart);

        return redirect()->route('user.enquiry');
        // TODO: Implement addCart() method.
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            $cart[$request->id]["totals"] = $cart[$request->id]["price"] * $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
            $total = 0;
            $totalQuantity = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
                $totalQuantity += $item['quantity'];
            }
            $cart[$request->id]["totalPrices"] = $total;
            $cart[$request->id]["totalQuantity"] = $totalQuantity;
            $product = $cart[$request->id];

            echo json_encode($product);
        }
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function deleteCart(int $id): RedirectResponse
    {
        $cart = Session::get('cart');
        if (Arr::get($cart, $id, null)) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }
        Session::put('cart', $cart);

        return redirect()->route('user.enquiry');
        // TODO: Implement deleteCart() method.
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function buyProduct(Request $request): RedirectResponse
    {
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->status = 0;
        $this->cartRepository->addOrder($order);
        $cart = Session::get('cart');
        foreach ($cart as $item) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $item['id'];
            $orderDetail->quantity = $item['quantity'];
            $orderDetail->unit_price = $item['price'];
            $this->cartRepository->addOrderDetail($orderDetail);
        }
        $data = [
            'orderId' => $order->id
        ];
        Mail::to(Auth::user()->email)->send(new OrderConfirmed($data));

        return redirect()->route('user.enquiry');
        // TODO: Implement buyProduct() method.
    }

    /**
     * @param int $orderId
     * @return RedirectResponse
     */
    public function orderConfirmed(int $orderId): RedirectResponse
    {
        $order = $this->cartRepository->findByIdOrder($orderId);
        $order->status = 1;
        $this->cartRepository->addOrder($order);
        $user = $this->cartRepository->findByIdUser($order->user_id);
        $name = $user->name;
        $data = [
            'name' => $name
        ];
        Mail::to(Auth::user()->email)->send(new SuccessOrderConfirmed($data));

        return redirect('https://mail.google.com/');
        // TODO: Implement orderConfirmed() method.
    }
}
