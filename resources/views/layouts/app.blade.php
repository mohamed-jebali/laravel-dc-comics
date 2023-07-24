<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- FONTAWESOME LINK V 6.4.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="{{ Vite::asset('resources/img/dc-logo.png') }}">
    <title>@yield('title', 'Laravel App')</title>

    @vite('resources/js/app.js')
    @yield('custom-stylesheets')
    @yield('custom-scripts-head')
</head>
<body>
    @include('partials.header')
    @include('partials.jumbotron')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')
    @yield('custom-scripts-tail')
</body>
</html>