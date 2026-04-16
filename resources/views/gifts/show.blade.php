@extends('layout')

@section('content')
    <h1>{{ $gift->name }}</h1>

    <p>prix : {{ $gift->price }} €</p>

    @if($gift->details)
        <p>détails : {{ $gift->details }}</p>
    @endif

    @if($gift->url)
        <p>lien : <a href="{{ $gift->url }}" target="_blank">{{ $gift->url }}</a></p>
    @endif

    <br>
    <a href="{{ route('gifts.index') }}">Retour à la liste</a>
@endsection