@extends('_layouts.master')

@section('body')
    <header>
        <h1>{{ $page->name }}</h1>
        <h2>{{ $page->role }}</h2>
    </header>

    @yield('content')
@endsection