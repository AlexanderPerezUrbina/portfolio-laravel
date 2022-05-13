@extends('client.layouts.main', ['view_name' => 'about'])

@section('head')
    <title>Sobre mí - Portafolio Web Alexander</title>
    <meta name="description"
        content="Alexander Pérez Urbina, nacido el 10 de febrero del 2005, empezo sus estudios a los 13 años cuando vio lo maravilloso que era el mundo de la programacion, y con" />
    <meta name="robots" content="index, follow" />
@endsection

@section('content')
    <main class="container">
        <h1>About</h1>
        @include('client.templates.contact')
    </main>
@endsection
