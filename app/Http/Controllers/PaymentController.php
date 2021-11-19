<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        return inertia("PaymentComplete");
    }

    public function card(){
        return inertia("Payment");
    }
}
