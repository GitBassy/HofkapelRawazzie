@extends('layouts.app')
@include('layouts.alerts')

@section('content')

<div>
<h1 class="text-center">Agenda</h1>

    <!--
    This shows a list of events

    TODO:
    - image
    - layout (fixed size + color)
      -->
    
    <div class="container">
  <div class="row">
@foreach($events as $event)

    <div class="col-sm">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $event->title }}</h5>
          <p class="card-text">{{ $event->description }}</p>
          <a href="/event/{{$event->id}}" class="btn btn-primary">Bekijk details</a>
        </div>
        <img src="..." class="card-img-top" alt="...(image)...">
    </div>
    </div>

    
    @endforeach
  </div>
</div>


@endsection
