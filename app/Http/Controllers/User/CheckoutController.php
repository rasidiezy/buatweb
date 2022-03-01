<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Checkouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\User\Checkout\Store;
use App\Models\Paket;
use App\Models\User;
use Auth;
use Mail;
use App\Mail\Checkout\afterCheckout;


class CheckoutController extends Controller
{
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
    public function create(Paket $paket, Request $request) 
    {
        
        if ($paket->isRegistered) {
            $request->session()->flash('error', "Anda telah teregistrasi di {$paket->judul}.");
            return redirect(route('user.dashboard')); 
        }
        return view('checkouts.create', [
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
}
