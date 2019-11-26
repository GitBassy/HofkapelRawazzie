@extends('layouts.app')
@include('layouts.alerts')

@section('content')

<div>
<h1>Agenda</h1>

    <!--
    This shows a list of events

    TODO:
    - image
    - layout
      -->
    <ul>
@foreach($events as $event)
  <li>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $event->title }}</h5>
        <p class="card-text">{{ $event->description }}</p>
        <a href="/event/{{$event->id}}" class="btn btn-primary">Bekijk details</a>
      </div>
    </div>
  </li>
@endforeach
</ul>
</div>


@endsection
