<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Event;
use App\EventFile;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $events = Event::all();//->where('id', $userId)->get();
        return view('agenda.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title' => 'required|unique:event|max:60',
            'eventtype' => 'required',
            'date' => 'required',
            'duedate' => 'required',
            'desc' => 'required|max:800',                        
        ]);
        
        $event = new Event(); 
        $event->title = request('title');
        $event->type = request('eventtype');               
        $event->date = request('date');        
        $event->duedate = request('duedate');
        $event->description = request('desc');        
 
        $event->save();
        if ($request->has('file'))
        {
            $file = new EventFile();
            // TODO:
            //$file->event_id = 1;
            $fileItem = $request->file('file'); 

            $file->filename = $fileItem->getClientOriginalName();
            $file->name = request('filename');    
           // $file->description = request('filedescription'); 
            $file->path = "images/";
            $file->type = "img";
            $file->save();
        }
        return view('news.index');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
