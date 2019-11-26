@extends('layouts.app')
@include('layouts.alerts')

@section('content')
<h1>Contact</h1>
<p>{{$info->name}}</p>

<p>{{$info->description}}</p>
@endsection
