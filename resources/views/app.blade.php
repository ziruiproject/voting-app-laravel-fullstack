@vite(['resources/js/app.js'])
@vite(['resources/sass/app.scss'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
</head>

<body>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>