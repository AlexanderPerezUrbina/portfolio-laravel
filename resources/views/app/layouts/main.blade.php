<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="es" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#00d394" />
    <meta httpEquiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords"
        content="desarrollador web,portafolio web,full stack developer,servicios de diseño web,web design services,web designer,diseñador web" />
    <meta name="author" content="Alexander Pérez" />
    <meta name="publisher" content="Alexander Pérez" />
    <meta http-equiv="expires" content="172800" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.1/css/line.css" media="print"
        onload="this.media='all'">


    @yield('head')
</head>

<body class="{{ $view_name ?? '' }}">
    @include('app.templates.nav')
    @yield('content')
    @include('app.templates.footer')

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <script src="{{ asset('js/app/index.js') }}" defer></script>
    @yield('scripts')
</body>

</html>
