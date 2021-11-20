<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewratings extends Controller
{
    public function index()
    {
        return inertia("UserViewReviews");
    }
}
