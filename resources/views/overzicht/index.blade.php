@extends('layouts.app')
@include('layouts.alerts')

@section('content')

<div>
<h1>Afwezigheid in de vereniging</h1>

    <!--
    This shows a list of absences
   

    TODO:
    - layout
      -->
    <ul>
@foreach($absences as $absence)
  <li>
    <p class="card-text">{{ $absence->event_id }}</p>
        <strong><p class="card-title">{{ $absence->title }}</p></strong>
        <p class="card-text">{{ $absence->name }}</p>
        
        <p class="card-text">{{ $absence->delay }} minuten</p>
  </li>
@endforeach
</ul>
</div>

@endsection
