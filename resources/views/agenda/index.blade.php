@extends('layouts.app')
@include('layouts.alerts')

@section('content')

<div>
<h1>Agenda</h1>
</div>
<div id="List">
    @foreach($event in $events)
    {
        
    }

</div>


@endsection
