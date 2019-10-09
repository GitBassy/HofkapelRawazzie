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
    
    <form method="POST" action="/items/store">
    @csrf
    <table>
        <caption>
        <h1>Add new item</h1>
        </caption>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
        <tr>
            
        <td><input type="text" name="name" id="name"></td>
        <td><input type="text" name="type" id="type"></td>
        <td><input type="text" name="desc" id="desc"></td>

        </tr>
        
    </table>  

    <input type="submit" value="Submit">
    </form>           
    

</div>
@endsection
