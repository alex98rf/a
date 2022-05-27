<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index(){
        return view('landing.index');
    }

    public function checkout(){
        return view('landing.checkout');
    }

    public function checkoutsupra(){
        return view('landing.checkoutsupra');
    }

    public function checkoutbuggatti(){
        return view('landing.checkoutbuggatti');
    }

    public function checkoutmclaren(){
        return view('landing.checkoutmclaren');
    }

    public function checkoutsubaru(){
        return view('landing.checkoutsubaru');
    }

    public function checkoutaudi(){
        return view('landing.checkoutaudi');
    }

    public function checkoutford(){
        return view('landing.checkoutford');
    }

    public function checkoutlamborghini(){
        return view('landing.checkoutlamborghini');
    }
}
