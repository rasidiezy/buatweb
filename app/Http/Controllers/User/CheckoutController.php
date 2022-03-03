<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Checkouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\User\Checkout\Store;
use App\Mail\Checkout\afterCheckout;
use App\Models\Paket;
use App\Models\User;
use Auth;
use Mail;
use Midtrans;
use Str;



class CheckoutController extends Controller
{

// public function __construct()
// {
//     Midtrans\Config::$serverKey = env('MIDTRANS_SERVERKEY');
//     Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
//     Midtrans\Config::$isSanitized = env('MIDTRANS_IS_SANITIZED');
//     Midtrans\Config::$is3ds = env('MIDTRANS_IS_3DS');
// }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // menaruh parameter Paket Slug yang dikirim sebelumnya
    public function create(Paket $paket, Request $request) 
    {
      
        //mengecek jika sudah ada data user yg login di checkout paket maka diarahkan ke dashboard user
        if ($paket->isRegistered) {
            $request->session()->flash('error', "Anda telah teregistrasi di {$paket->judul}.");
            return redirect(route('user.dashboard')); 
        }
        //jika tidak ada maka akan diteruskan ke bagian view->folder checkouts->create.blade.php
        return view('checkouts.create', [
            //mengirim parameter data paket
            'paket' => $paket
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request, Paket $paket)
    {
        //mapping request data
        return $request->all();
        $data = $request->all();
        $data['users_id'] = Auth::id();
        $data['paket_id'] = $paket->id;
        
        //update data user
        $user = Auth::user();
        $user->email= $data['email'];
        $user->nama= $data['name'];
        $user->pekerjaan= $data['pekerjaan'];
        $user->save();

        //insert checkout
        $checkouts = Checkouts::create($data);
        $this->getSnapRedirect($checkouts);

        //send email
        Mail::to(Auth::user()->email)->send(new afterCheckout($checkouts));

        return redirect(route('checkout.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkouts  $checkouts
     * @return \Illuminate\Http\Response
     */
    public function show(Checkouts $checkouts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkouts  $checkouts
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkouts $checkouts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkouts  $checkouts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkouts $checkouts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkouts  $checkouts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkouts $checkouts)
    {
        //
    }

    public function success() {
        return view('checkouts.success');
    }

    public function getSnapRedirect(Checkouts $checkouts)
    {
        $orderId = $checkouts->id.'-'.Str::random(5);
        $price = $checkout->Paket->harga;

        $transactionDetails = [
            'order_id' => $orderId,
            'gross_amount' => $price
        ];

        $item_details = [
            'id' => $orderId,
            'price' => $price,
            'quantity' => 1,
            'name' => "Pembayaran untuk {$checkouts->Paket->judul}"
        ];

        $userData = [
            "first_name"=> $checkouts->User->nama,
            "last_name" => "",
            "adress" => $checkouts->User->alamat,
            "city" => "",
            "postal_code" => "",
            "phone" => $checkouts->User->no_telepon,
            "country_code" => "ID",
        ];

        $customerDetails = [
            "first_name" => $checkouts->User->nama,
            "last_name" => "",
            "email" => $checkouts->User->email,
            "phone" => $checkouts->User->no_telepon,
            "billing_adress" => $userData,
            "shipping_adress" => $userData,
        ];

        $midtrans_params = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
            'item_details' => $item_details,
        ];

        try {
            //Get Snap Payment Page URL
            $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
            $checkouts->midtrans_url = $paymentUrl;
            $checkouts->save();

            return $paymentUrl;
        } catch (Exception $e) {
           return false;
        }
    }

    public function midtransCallback(Request $request)
    {
        $notif = new Midtrans\Notification();

        $transaction_status = $notif->transaction_status;
        $fraud = $notif->fraud_status;

        $checkout_id = explode('-', $notif->order_id) [0];
        $checkout = Checkout::find($checkout_id);

        if ($transaction_status == 'capture') {
            if ($fraud == 'challenge') {
            // TODO Set payment status in merchant's database to 'challenge'
            $checkout->payment_status = 'pending';
            }
            else if ($fraud == 'accept') {
            // TODO Set payment status in merchant's database to 'success'
            $checkout->payment_status = 'sukses';
            }
        }
        else if ($transaction_status == 'cancel') {
            if ($fraud == 'challenge') {
            // TODO Set payment status in merchant's database to 'failure'
            $checkout->payment_status = 'gagal';
            }
            else if ($fraud == 'accept') {
            // TODO Set payment status in merchant's database to 'failure'
            $checkout->payment_status = 'gagal';
            }
        }
        else if ($transaction_status == 'deny') {
            // TODO Set payment status in merchant's database to 'failure'
            $checkout->payment_status = 'gagal';
        }
        else if ($transaction_status == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $checkout->payment_status = 'sukses';
        }
        else if ($transaction_status == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $checkout->payment_status = 'pending';
        }
        else if ($transaction_status == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $checkout->payment_status = 'gagal';
        }

        $checkout->save();
        return view('checkout/success');
    }
}
