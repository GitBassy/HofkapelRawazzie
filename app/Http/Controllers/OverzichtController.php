<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;
use App\Absence;

class OverzichtController extends Controller
{
    public function index()
    {
        $absences = DB::table('absence')
        ->join('event', 'absence.event_id', '=', 'event.id')
        ->join('user', 'absence.user_id', '=', 'user.id')
        ->select('absence.*', 'event.*', 'user.*')
        ->get();
        return view('overzicht.index')->with('absences', $absences);;
    }

    public function show($id)
    {
        return view('overzicht.show');
    }
}
