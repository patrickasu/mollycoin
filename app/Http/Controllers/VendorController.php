<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendor()
    {
        return view('bitcoin/vendor');
    }
    public function cashapp()
    {
        return view('bitcoin/cashapp-paypal');
    }
}
