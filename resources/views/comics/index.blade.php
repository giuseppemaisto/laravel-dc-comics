@extends('layouts.app')
@section('content')
<div class="container bg-white my-2">
    <div class="row">
        <div class="col-12 py-3 ">
            <div class="d-flex justify-content-between align-items-center m-2">
                <h2>FUMETTI</h2>
                <a href="{{route('comics.create')}}"><button class="btn btn-success">aggiungi fumetto</button></a>
            </div>
        </div>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>immagine</th>
                <th>titolo</th>
                <th>serie</th>
                <th>tipo</th>
                <th>data di uscita</th>
                <th>prezzo</th>
                <th>azioni</th>
            </thead>

            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic['id'] }}</td>
                    <td><img style="width: 200px" class="card-img img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['thumb']}}"></td>
                    <td>
                         <a href="{{route('comics.show', ['comic' => $comic['id']])}}">
                            {{ $comic['title']}}</td>
                    </td>
                    <td>{{$comic['series']}}</td>
                    <td>{{$comic['type']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                    <td>{{$comic['price']}} €</td>
                    <td>
                        <a href="{{route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">modifica </a>
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger my-2 w-100">elimina</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection