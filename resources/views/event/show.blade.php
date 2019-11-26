@extends('layouts.app')
@include('layouts.alerts')

@section('content')

<div>
<h1>Details van evenement: {{$event->id}}</h1>

    <!--
    This shows details of event

    TODO:
    - image
    - layout
      -->

    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $event->title }}</h5>
        <p class="card-text">{{ $event->description }}</p>
      </div>
    </div>
</ul>
</div>


@endsection
