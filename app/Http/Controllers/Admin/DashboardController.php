<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkouts;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
    //mengambil data checkout, user dan paket sesuai user yang login
      $checkouts = Checkouts::with('Paket')->get();
      return view('admin.dashboard',[
          'checkouts' => $checkouts
      ]);
    }

}
