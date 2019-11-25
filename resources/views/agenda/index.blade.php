@extends('layouts.app')
@include('layouts.alerts')

@section('content')

<div>
<h1>Agenda</h1>
</div>
<div id="List">
    <!--
    This shows a list of events

    TODO:
    - description
    - image
    - layout
      -->
    <ul>
@foreach($events as $event)
<li>
   <h3>{{ $event->title }}</h3>
   <p>{{ $event->description }}</p>
   <!-- <img source={{$event}}> -->
</li>
@endforeach
</ul>
</div>


@endsection
