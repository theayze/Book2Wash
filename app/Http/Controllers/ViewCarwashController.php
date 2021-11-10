<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewCarwashController extends Controller
{
    public function index()
    {
        return inertia("ViewCarwash");
    }
}
