@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-12 d-flex justify-content-between">
        <div>
            <h1>iserisci nuovo fumetto</h1>
        </div>
        <div class="my-2">
        <a href="{{ route('comics.index')}}" class="btn btn-primary"> torna all'elenco</a>
        </div>
    </div>
</div>
</div>

<div class="container p-2">


<form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label class="control-label">Titolo</label>
        <input type="text" name="titolo" class="form-control"
        placeholder="inserisci titolo">
    </div>

    <div class="form-group">
        <label class="control-label">Tipo</label>
        <select class="form-control" name="tipo">
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">serie</label>
        <input type="text" name="serie" class="form-control"
        placeholder="inserisci serie">
    </div>
    <div class="form-group">
        <label class="control-label">prezzo</label>
        <input type="text" name="prezzo" class="form-control"
        placeholder="inserisci prezzo">
    </div>
    <div class="form-group">
        <label class="control-label">immagine</label>
        <input type="text" name="image" class="form-control"
        placeholder="inserisci immagine">
    </div>

    <div class="form-group mb-3">
        <label class="control-label">descrizione</label>
        <textarea type="text" name="descrizione" class="form-control"
        placeholder="inserisci descrizione" rows="10"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">salva</button>
    </div>
</form>
</div>

@endsection