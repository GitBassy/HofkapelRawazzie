<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('berichttoevoegen.index');
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
            'title' => 'required|unique:posts|max:100',
            'type' => 'required',
            'date' => 'required',
            'duedate' => 'required',
            'content' => 'required|max:300',                        
        ]);
        
        $event = new Event();
 
        $event->title = request('title');
        $event->type = request('type');        
        $event->subject = request('subject');        
        $event->date = request('date');        
        $event->duedate = request('duedate');
        $event->content = request('content');        
 
        $event->save();
        if ($request->has('file'))
        {
            $file = new EventFile();
            // TODO:
            // Get last event id from db, increment by one to fill in below
            $file->event_id = 1;
            $fileItem = $request->file('file'); 

            $file->filename = $fileItem->getClientOriginalName();
            $file->name = request('filename');        
            $file->date = request('date');        
            $file->duedate = request('duedate');
            $file->content = request('content'); 

            $file->save();
        }
 
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
