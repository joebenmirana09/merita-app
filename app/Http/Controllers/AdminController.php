<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // RETURN TO DASHBOARD PAGE
    public function view_dashboard()
    {
        $data = session()->all();
        return view('layouts.admin', $data);
    }
}