@extends('layouts.app')
@section('content')


<div class="container bg-white my-2">
    <div class="row justify-content-center">

        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{$comic['title']}}</h1>
                <a href="{{ route('comics.index')}}" class="btn btn-primary"> torna all'elenco</a>
            </div>
        </div>

        @if(!empty($comic['thumb']))
        <img style="width: 200px" src="{{ $comic['thumb']}}" alt="">
        @else 
        <h5>immagine non disponibile </h5>
        @endif

        <div>
            <h3 class="titolo">titolo</h3>
            <h6">{{$comic['title']}}</h6>

            <h5>{{$comic['series']}}</h5>
            <h5>{{$comic['type']}}</h5>
            
            <h3 class="titolo">copertina</h3>
            <h6>{{$comic['thumb']}}</h6>

            <h3 class="titolo">serie</h3>
            <h6>{{$comic['series']}}</h6>

            <h3 class="titolo">descrizione</h3>
            
            <h6>{{$comic['description']}}</h6>

       
            <h3>data di uscita</h3>
            <h5>{{$comic['sale_date']}}</h5>

        </div>
    </div>
</div>

@endsection