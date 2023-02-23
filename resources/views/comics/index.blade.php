@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach ($comics as $comic)

<div class="col-2">
<a href="#">
    <div class="card">
    
        <img class="card-img-top img-fluid" src="{{$comic['image']}}" alt="{{$comic['image']}}">
        <div class="card-body">
            <h3>{{ $comic['titolo']}}</h3>
            <h6>{{$comic['serie']}}</h6>
        </div>
    </div>
</a>
</div>
 
@endforeach

    </div>
</div>
@endsection