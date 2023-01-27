@extends('layouts.app')
@section('title')
    Modifica {{ $comic->title }}
@endsection

@section('page-content') 
    <h1>Modifica {{ $comic->title }}</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" required value="{{ $comic->title }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" required>{{ $comic->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" required value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" required value="{{ $comic->series }}">
        </div>

        <div class="mb-3">
            <label for="sell_date" class="form-label">Data di vendita</label>
            <input type="date" class="form-control" id="sell_date" name="sell_date" required value="{{ $comic->sell_date }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" required value="{{ $comic->type }}">
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
@endsection