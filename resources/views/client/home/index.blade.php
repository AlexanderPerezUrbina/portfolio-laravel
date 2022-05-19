@extends('client.layouts.main', ['view_name' => 'home'])

@section('head')
    <title>Alexander Pérez | Desarrollador Web</title>
    <meta name="description"
        content="¡Hola! Soy Alexander Pérez, este es mi portafolio web. Conoce más sobre mí y de mis experiencias, habilidades, y conocimientos, en el ámbito del desarrollo de aplicaciones web." />
    <meta name="robots" content="index, follow" />

    <link rel="stylesheet" href="{{ asset('css/app/home/index.css') }}" media="print" onload="this.media='all'">
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
    <script defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection
