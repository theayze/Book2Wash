<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::latest()->orderBy('id','ASC')->get();

        return inertia('Dashboard', [
            'users' => $users
        ]);
    }
}
