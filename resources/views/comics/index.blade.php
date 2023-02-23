@extends('layouts.app')
@section('content')
<div class="container">
    <div>
         <a href="{{route('comics.create')}}"><button class="btn btn-light">aggiungi fumetto</button></a>
    </div>


    <div class="row d-flex flex-column">
        <div class="col d-flex flex-wrap justify-content-center">
            @foreach ($comics as $comic)
            <a href="{{route('comics.show', ['comic' => $comic['id']])}}">
                <div class="card">
                    <img style="width: 200px" class="card-img-top img-fluid" src="{{$comic['image']}}" alt="{{$comic['image']}}">
                    <h6>{{ $comic['titolo']}}</h6>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    

</div>
@endsection