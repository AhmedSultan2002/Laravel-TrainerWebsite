<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
     <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <header>
        <h1>My Laravel Application</h1>
    </header>

    <main>
        @yield('content') <!-- This is where the child view content will appear -->
    </main>

    <footer>
        <p>&copy; 2024 My Laravel Application</p>
    </footer>
</body>
</html>
