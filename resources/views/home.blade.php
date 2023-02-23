@extends('layouts.app')

@section('content')

   
       

        <div class="jumbotron">
             <img src="{{Vite::asset('resources/images/jumbotron.jpg')}}" alt="">
         </div>
        <div class="container">
          <div class="row">
          @foreach ($comics as $key => $comic)

            <div class="col-2">
            <a href="{{route('detail_comic', $comic['id']-1)}}">
                <div class="card">
                
                    <img class="card-img-top img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['thumb']}}">
                    <div class="card-body">
                        <h6>{{ $comic['series']}}</h6>
                    </div>
                </div>
            </a>
            </div>
             
            @endforeach
          
          </div>

            
        </div>
     @endsection   
 