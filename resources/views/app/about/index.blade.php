@extends('app.layouts.main', ['view_name' => 'about'])

@section('head')
    <title>Sobre mí | {{ env('APP_NAME') }}</title>
    <meta name="description"
        content="Alexander Pérez Urbina, nacido el 10 de febrero del 2005, San Felipe, Chile. Empezo sus estudios a los 13 años queriendo ser un programador web." />
    <meta name="robots" content="index, follow" />

    <link rel="stylesheet" href="{{ asset('css/app/about.css') }}">
@endsection

@section('content')
    <main class="container">
        <h1>Sobre mí</h1>
        @include('app.about.personal-info')
        @include('app.about.portfolio')
        @include('app.templates.contact')
    </main>
@endsection
