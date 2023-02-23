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
        <img style="width: 200px" src="{{ $comic['image']}}" alt="">
        @else 
        <h5>immagine non disponibile </h5>
        @endif

        <div>
            <h3 class="titolo">titolo</h3>
            <h6">{{$comic['titolo']}}</h6>

            <h3 class="titolo">copertina</h3>
            <h6>{{$comic['image']}}</h6>

            <h3 class="titolo">serie</h3>
            <h6>{{$comic['serie']}}</h6>

            <h3 class="titolo">descrizione</h3>
            <h6>{{$comic['descrizione']}}</h6>
        </div>
    </div>
</div>

@endsection