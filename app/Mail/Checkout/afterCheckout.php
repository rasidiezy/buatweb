<?php

namespace App\Mail\Checkout;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class afterCheckout extends Mailable
{
    use Queueable, SerializesModels;

    private $checkout;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Pembelian Paket: {$this->checkout->Paket->judul}")->markdown('emails.checkout.afterCheckout', [
            'checkout' => $this->checkout 
        ]);
    }
}
