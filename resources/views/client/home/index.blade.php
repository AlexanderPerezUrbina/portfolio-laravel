@extends('client.layouts.main', ['view_name' => 'home'])

@section('head')
    <title>Alexander Pérez | Desarrollador Web</title>
    <meta name="description"
        content="¡Hola! Soy Alexander Pérez, este es mi portafolio web. Conoce más sobre mí y de mis experiencias, habilidades, y conocimientos, en el ámbito del desarrollo de aplicaciones web." />
    <meta name="robots" content="index, follow" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/client/home.css') }}">
@endsection

@section('content')
    @include('client.home.header')
    <main class="container">
        @include('client.home.about')
        @include('client.home.recent-projects')
        @include('client.home.services')
        @include('client.templates.contact')
    </main>
@endsection

@section('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/client/home.js') }}"></script>
@endsection
