<?php

namespace Modules\User\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('trongtu1006@gmail.com', 'Impress.vn')
            ->view('user::users.emails.orderConfirmed')
            ->subject('[Impress.vn] Xác thực đơn hàng của bạn')
            ->with($this->data);
    }
}
