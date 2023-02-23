@extends('layouts.app')

@section('content')

<div class="blue">

</div>
<div class="body-detail">



   <div class="container">
        <div class="container-img">
            <img src="{{$single['thumb']}}" alt="">
            <p>{{ $single['type']}}</p>
        </div>
   </div>

   <div class="container d-flex">
        <div class="row">
            <div>
                <h1 class="title-detail">{{ $single['title']}}</h1>
            </div>
        

            <div class="info">
                <div class="col-6">
                <p>{{$single['description']}}</p>
                </div>
               
            </div>
        </div>

        <div class="pub">
            <div class="row">
                <div class="col-6">
                <h1>img-adv</h1>
            <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
                </div>
            </div>
           
        </div>
   </div>
</div>
@endsection