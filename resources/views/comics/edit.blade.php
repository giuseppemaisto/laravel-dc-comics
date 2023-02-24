@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-12 d-flex justify-content-between">
        <div>
            <h1>modifica fumetto</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
        
                </div>
                @endif
        </div>
        <div class="my-2">
        <a href="{{ route('comics.index')}}" class="btn btn-primary"> torna all'elenco</a>
        
            
        </div>
    </div>
</div>
</div>

<div class="container p-2">


<form action="{{ route('comics.update', $comic->id)}}" method="POST">
    @csrf
    <div class="form-group">
        <label class="control-label">Titolo</label>
        <input type="text" name="title" class="form-control"
        placeholder="inserisci titolo" value="{{ old('title') ?? $comic->title }}">
        @error('title')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label class="control-label">Tipo</label>
        <select class="form-control" name="type">
            <option value="comic book" @selected(old('type', $comic->type) == 'comic book')>comic book</option>
            <option value="graphic novel" @selected(old('type', $comic->type) == 'graphic novel')>graphic novel</option>
        </select>
        @error('title')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label class="control-label">serie</label>
        <input type="text" name="series" class="form-control"
        placeholder="inserisci serie" value="{{ old('series') ?? $comic->series }}">
    </div>
    <div class="form-group">
        <label class="control-label">prezzo</label>
        <input type="text" name="price" class="form-control"
        placeholder="inserisci prezzo" value="{{ old('price') ?? $comic->price}}">
    </div>
    <div class="form-group">
        <label class="control-label">immagine</label>
        <input type="text" name="thumb" class="form-control"
        placeholder="inserisci immagine" value="{{ old('thumb') ?? $comic->thumb}}">
    </div>

    <div class="form-group">
        <label class="control-label">data</label>
        <input type="date" name="sale_date" class="form-control"
        placeholder="inserisci data" value="{{ old('sale_date') ?? $comic->sale_date}}">
    </div>
    

    <div class="form-group mb-3">
        <label class="control-label">descrizione</label>
        <textarea type="text" name="description" class="form-control"
        placeholder="inserisci descrizione" rows="10" value="old('description') ?? $comic->description"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary w-50">salva</button>
    </div>
</form>
</div>

@endsection