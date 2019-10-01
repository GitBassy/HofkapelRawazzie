@if($errors->any())
    <ul>
       @foreach ($errors->all() as $error)
          <li class="alert alert-warning">{{ $error }}</li>
       @endforeach
   </ul>
@endif

@if(session('success'))
    <div class="alert p-2 alert-temp mt-1 alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert p-2 alert-temp mt-1 alert-danger">
        {{session('error')}}
    </div>
@endif
