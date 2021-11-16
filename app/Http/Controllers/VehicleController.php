<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        return inertia("VehicleList");
    }

    public function create(){
        return inertia("AddVehicle");
    }

}
