@extends('pastel-layout')

@section('content')
    <h1>{{ $title }}</h1>
@endsection

@section('title')
    Adatküldés URL segítségével
@endsection


{{-- veszélyesek: --}}
{{-- <h1><?= $title ?></h1>
<h1>{!! $title !!}</h1> --}}
