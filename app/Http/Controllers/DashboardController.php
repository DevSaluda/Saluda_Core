<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function posv()
    {
        return view('dashboard.posv');
    }

    public function citas()
    {
        return view('dashboard.citas');
    }

    public function servicios()
    {
        return view('dashboard.servicios');
    }

    public function medicos()
    {
        return view('dashboard.medicos');
    }
} 