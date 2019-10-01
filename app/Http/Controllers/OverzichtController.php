<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverzichtController extends Controller
{
    public function index()
    {
        return view('overzicht.index');
    }

    public function show($id)
    {
        return view('overzicht.show');
    }
}
