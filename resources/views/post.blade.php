@extends('pastel-layout')

@section('content')
    <h2>{{ $post }}</h2>
    <p>length: {{ $length }} character(s)</p>
@endsection

@section('title')
    Első blogbejegyzés
@endsection
