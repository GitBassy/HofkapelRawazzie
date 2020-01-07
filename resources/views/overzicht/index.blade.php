@extends('layouts.app')
@include('layouts.alerts')

@section('content')

<div>
<h1>Afwezigheid in de vereniging voor evenementen</h1>

    <!--
    This shows a list of absences   

    TODO:
    - layout
    - color display
      -->
    <table class="table-responsive table">
    <tr>
    <th>Datum</th>
    <th>Titel</th>
    <th>Lid</th>
    <th>Vertraging (in min)</th>
    <th>Verklaring</th>
  </tr>
@foreach($absences as $absence)
<tr>
    <td>{{ $absence->date }}</td>
    <td>{{ $absence->title }}</td>
    <td>{{ $absence->name }}</td>
    @if($absence->delay <= 0)         
      <td>Afwezig</td>    
    @elseif($absence->delay > 0)    
      <td>{{ $absence->delay }} minuten</td>    
    @endif
    <td>{{ $absence->remark }}</td>
</tr>
@endforeach
</table>
</div>

@endsection
