<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardMemberController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }   
}
