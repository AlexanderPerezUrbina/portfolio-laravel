@extends('client.layouts.main', ['view_name' => 'not-found'])

@section('head')
    <title>Pagina no encontrada - {{ env('APP_NAME') }}</title>
    <meta name="robots" content="noindex, nofollow" />

    <link rel="stylesheet" href="{{ asset('css/client/not-found.css') }}">
@endsection

@section('content')
    <main class="container">
        <h1>Ups!</h1>
        <p>La pagina que buscas no existe, o ya no esta disponible.</p>
        <a href="/">
            <button>Ir al inicio</button>
        </a>
    </main>
@endsection
