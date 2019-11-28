@extends('layouts.app')
@include('layouts.alerts')

@section('content')

<div>
<h1>Afwezig melden</h1>

    <!--
    This adds someones absence to the list 

    TODO:
    - layout
      -->
      <form method="POST" action="/overzicht">
      @csrf
      <label>Naam evenement:</label><select name="event">
@foreach($events as $event)

  <option value={{$event->id}}>{{$event->title}}</option>
  @endforeach
</select> 
    <p class="card-text">Persoon: {{ $user->firstname }} {{ $user->prefix }} {{ $user->surname }}</p>
    
    <input type="radio" name="absenceKind" value="absent"> Afwezig<br>
  <input type="radio" name="absenceKind" value="delay"> Vertraging<br>

    <label>Tijd vertraging:</label><input type="number" id="delay" name="delay" value=""  >
    <br>
    <label>Verklaring vertraging:</label><input type="text" id="desc" name="desc" value=""  >
    <input type="submit" value="Submit"  >
    
  </form>           
</div>

@endsection
