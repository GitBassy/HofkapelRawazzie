<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;
use Auth;
use App\Absence;
use App\Event;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $userId = Auth::id();
        $user = Auth::user();
        $events = Event::whereNotIn('type', ['News'])->get();

        //print($events);
        return view('overzicht.create', array('userId' => $userId, 'user' => $user,
        'events' => $events));
    }


    public function show($id)
    {
        return view('overzicht.show');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'absenceKind' => 'required',            
            'delay' => 'required',                       
        ]);
        
        $absence = new Absence(); 
        $absence->event_id = request('event');
        $absence->user_id = Auth::id();         
        $absence->delay = request('delay');              
        $absence->remark = request('desc');        
 
        $absence->save();

        return redirect()->action(
            'OverzichtController@index', []
        );
        //return view('overzicht.index');
 
    }
}
