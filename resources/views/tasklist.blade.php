@extends('pastel-layout')

@section('content')
    <ul>
        <?php foreach($tasks as $task) : ?>
        <li><?= $task ?></li>
        <?php endforeach; ?>
    </ul>
    {{-- Egyszerűbben (Blade) --}}
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
    <div>{{ $foo }}</div>
@endsection

@section('title')
    Tömb adatainak küldése
@endsection
