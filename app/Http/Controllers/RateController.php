<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RateController extends Controller
{
    public function rate()
    {
        return view('bitcoin/rate');
    }
}
