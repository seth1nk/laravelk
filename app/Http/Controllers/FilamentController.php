<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilamentController extends Controller
{
    public function index()
    {
        return view('filament.dashboard');
    }
}
