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
                </a>
                    <div class="m-2" >
                        <a href="{{route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">modifica </a>
                    </div>
                </div>
            
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger my-2">elimina</button>
            </form>
            @endforeach
        </div>
    </div>
    

</div>
@endsection