@extends("layouts.master")

@section("pageTitle", "Treni")

@section("title", "Lista treni")

@section("Content")

    <ul>
        @foreach ($trains as $train)
            <li>{{ $train["company"] }}</li>
        @endforeach
    </ul>

@endsection