@extends('layouts.app')
@section('title')
    Dc Comics
@endsection

@section('page-content')
    <h1>Dc Comics</h1> 
    <a class="btn btn-primary" href="{{route('comics.create')}}">Aggiungi Comic</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
              <tr>
                <td>{{ $comic->id}}</td>
                <td><img src="{{ $comic->thumb}}" width="100"></td>
                <td>{{ $comic->title}}</td>
                <td>{{ $comic->series}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">Descrizione</a>
                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Elimina</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
@endsection