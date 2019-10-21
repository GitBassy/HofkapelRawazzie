@extends('layouts.app')
@include('layouts.alerts')



@section('content')
<script type="text/javascript" src="{{URL::asset('js/extra.js')}}">
</script>



<div class="container">
    <h1 style="text-align:center; margin: 20px;";>Bericht toevoegen</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   <!-- Form::model($user, array('route' => array('user.update', $user->id)))
    echo Form::file($name, $attributes = array()); -->

    <form method="POST" action="/news/store">
    @csrf
    <table style="margin-left: auto; margin-right: auto;" >
        <tr>
            <td>Titel</td>
            <td><input type="text" name="title" id="title"></td>
        </tr>
        <tr>
            <td>Type</td>
            <td> <select>
                <option value="Rehearsal">Training</option>
                <option value="Performance">Optreden</option>
                <option value="News">Nieuwsbericht</option>
                
            </select> </td>
        </tr>
        <tr>
            <td>Onderwerp</td>
            <td><input type="text" name="subject" id="subject"></td>
        </tr>
        <tr>
            <td>Startdatum</td>
            <td><input type="date" name="dateStart" id="dateStart"></td>
        </tr>
        <tr>
            <td>Einddatum</td>
            <td><input type="date" name="dateEnd" id="dateStart"></td>
        </tr>
        <tr>
            <td>Beschrijving</td>
            <td><input type="text" name="desc" id="desc"></td>
        </tr>
        <tr>
            <td>Afbeelding selecteren</td>
            <td><input type="file" name="inpImg" id="inpImg" accept="image/x-png,image/gif,image/jpeg"
            onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])"></td>
        </tr>
        <tr>
            <td>Voorbeeld afbeelding</td>
            <td> <img id="previewImg" src="#" alt="XXXXX" style="max-height:120px; max-width:200px;" /></td>
        </tr>
    
    </table>  
    <input type="submit" value="Submit"  >

    </form>           
    
</div>
@endsection
