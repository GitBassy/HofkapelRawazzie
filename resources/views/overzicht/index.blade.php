@extends('layouts.app')
@include('layouts.alerts')

@section('content')

<div>
<h1>Afwezigheid in de vereniging voor evenementen</h1>

    <!--
    This shows a list of absences
   

    TODO:
    - layout
      -->
    <table class="table-responsive table">
    <tr>
    <th>ID</th>
    <th>Titel</th>
    <th>Lid</th>
    <th>Vertraging</th>
    <th>Verklaring</th>
  </tr>
@foreach($absences as $absence)
<tr>
    <td>{{ $absence->event_id }}</td>
    <td>{{ $absence->title }}</td>
    <td>{{ $absence->name }}</td>
    <td>{{ $absence->delay }}</td>
    <td>{{ $absence->remark }}</td>
</tr>
@endforeach
</table>
</div>

@endsection
