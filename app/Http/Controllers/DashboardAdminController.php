<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    // Dashboard Admin
    public function index()
    {
        return view('admin.pages.dashboard');
    }
}
