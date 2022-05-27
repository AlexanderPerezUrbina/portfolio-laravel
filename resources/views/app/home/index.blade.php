@extends('app.layouts.main', ['view_name' => 'home'])

@section('head')
    <title>Alexander Pérez | Desarrollador Web</title>
    <meta name="description"
        content="¡Hola! Soy Alexander Pérez, este es mi portafolio web. Conoce más sobre mí y de mis experiencias, habilidades, y conocimientos, en el ámbito del desarrollo de aplicaciones web." />
    <meta name="robots" content="index, follow" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" media="print"
        onload="this.media='all'" />
    <link rel="stylesheet" href="{{ asset('css/app/home.css') }}">
@endsection

@section('content')
    @include('app.home.header')
    <main class="container">
        @include('app.home.about')
        @include('app.home.recent-projects')
        @include('app.home.services')
        @include('app.templates.contact')
    </main>
@endsection

@section('scripts')
    <script defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script defer src="{{ asset('js/app/home.js') }}"></script>
@endsection
