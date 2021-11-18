<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        return inertia("Search");
    }

    public function create(){
        return inertia("ViewCarwash");
    }

}
