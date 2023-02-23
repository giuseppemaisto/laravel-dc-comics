@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">

        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{$comic['titolo']}}</h1>
                <a href="{{ route('comics.index')}}" class="btn btn-primary"> torna all'elenco</a>
            </div>
        </div>

        @if(!empty($comic['image']))
        <img src="{{ $comic['image'}}" alt="">
        @else 
        <h5>immagine non disponibile </h5>
        @endif

        <div>
            <h3>titolo</h3>
            <h6>{{$comic['titolo']}}</h6>

            <h3>copertina</h3>
            <h6>{{$comic['image']}}</h6>

            <h3>serie</h3>
            <h6>{{$comic['serie']}}</h6>

            <h3>descrizione</h3>
            <h6>{{$comic['descrizione']}}</h6>
        </div>
    </div>
</div>

@endsection