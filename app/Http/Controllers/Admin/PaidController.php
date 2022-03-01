<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkouts;
use Mail;
use App\Mail\Checkout\Paid;

class PaidController extends Controller
{
    public function paid(Request $request, Checkouts $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();
        //send email to user
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success', "Pembelian Paket {$checkout->user->nama} telah diperbaharui menjadi telah bayar");
        return redirect(route('admin.dashboard'));
    }

    public function unpaid(Request $request, Checkouts $checkout)
    {
       $checkout->is_paid = false;
       $checkout->save();
       $request->session()->flash('warning', "Pembelian Paket {$checkout->user->nama} telah diperbaharui menjadi menunggu pembayaran");
       return redirect(route('admin.dashboard'));
    }
}
