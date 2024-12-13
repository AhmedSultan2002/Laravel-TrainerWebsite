<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Personal Trainer Co.')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/General.css') }}">
    @stack('styles') <!-- Additional styles specific to a page -->
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content') <!-- Dynamic content section -->
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts') <!-- Additional scripts specific to a page -->
</body>
</html>
