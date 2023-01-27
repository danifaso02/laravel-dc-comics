@extends('layouts.app')
@section('title')
    {{ $comic->title }}
@endsection

@section('page-content') 
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <div>
        Prezzo: <h5>{{ $comic->price }}</h5>
    </div>
@endsection