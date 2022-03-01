<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkouts;
use Auth;


class DashboardController extends Controller
{
    public function index()
    {
          //mengambil data checkout, paket, dan user sesuai user yang login
          $checkouts = Checkouts::with('Paket')->whereUsersId(Auth::id())->get();
          return view('user.dashboard',[
              'checkouts' => $checkouts
          ]);
  
    }
}
