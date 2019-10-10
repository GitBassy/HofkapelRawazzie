@extends('layouts.app')
@include('layouts.alerts')

@section('content')
bericht toevoegen

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    echo Form::model($user, array('route' => array('user.update', $user->id)))
    
    <form method="POST" action="/news/store">
    @csrf
    <table>
        <caption>
        <h1>Aanmaken van een evenement</h1>
        </caption>
        <tr>
            <td>Naam</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><input type="text" name="type" id="type"></td>
        </tr>
        <tr>
            <td>Beschrijving</td>
            <td><input type="text" name="desc" id="desc"></td>
        </tr>
        <tr>
            <td>Startdatum</td>
            <td><input type="date" name="dateStart" id="dateStart"></td>

        </tr>
        
    </table>  

    <input type="submit" value="Submit">
    </form>           
    

</div>
@endsection
