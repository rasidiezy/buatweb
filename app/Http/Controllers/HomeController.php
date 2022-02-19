<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Checkouts;
use Auth;

class HomeController extends Controller
{
    public function dashboard(){
        //mengambil data checkout dan camp sesuai user yang login
        $checkouts = Checkouts::with('Paket')->whereUsersId(Auth::id())->get();
        return view('user.dashboard',[
            'checkouts' => $checkouts
        ]);

    }
}
