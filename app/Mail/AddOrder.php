<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class AddOrder extends Mailable
{
    public $order;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('new-order@belanjasemua.com', 'New Order di Belanjasemua.com')
            ->subject('[Order#' . $this->order->id . '] Congratulations! You have new order!')
            ->with([
                'nama_lengkap' => $this->order->nama_lengkap,
                'produk' => $this->order->produk,
                'kisaran_harga' => $this->order->kisaran_harga,
                'catatan' => $this->order->catatan,
                'email' => $this->order->email,
                'nohp' => $this->order->nohp,
                'tipe_pengiriman' => $this->order->tipe_pengiriman,
            ])
            ->markdown('emails.sites.addorderr');
    }
}
