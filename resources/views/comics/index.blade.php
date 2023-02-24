@extends('layouts.app')
@section('content')
<div class="container bg-white">
    <div>
         <a href="{{route('comics.create')}}"><button class="btn btn-success">aggiungi fumetto</button></a>
    </div>


    <div class="row">
        <div class="col justify-content-center">
            @foreach ($comics as $comic)
            <a href="{{route('comics.show', ['comic' => $comic['id']])}}">
                <div class="card d-flex flex-row my-2">
                    <img style="width: 200px" class="card-img img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['thumb']}}">
                   
                
                    <div class="card-body">
                    <h3>{{ $comic['title']}}</h3>
                    <h5>{{$comic['series']}}</h5>
                    <h5>{{$comic['type']}}</h5>
                    <h5>{{$comic['sale_date']}}</h5>

                    </div>

                    <div class="m-2" >
                        <button class="btn btn-warning">modifica </button>
                    </div>
                    <div class="m-2">
                        <button class="btn btn-danger">elimina </button>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    

</div>
@endsection