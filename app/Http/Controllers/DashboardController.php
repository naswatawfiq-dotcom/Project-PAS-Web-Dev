<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     Public function index()
    {
        return view('admin.dashboard',[
            'title' => 'Dashboard',
            'content' => 'Welcome to the Dashboard',
        ]);
    }
}
