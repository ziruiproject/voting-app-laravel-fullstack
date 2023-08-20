<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App')</title>
    <!-- Include your CSS and JavaScript libraries here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- You can include more CSS or JS files here -->
</head>

<body>
    <header>
        <!-- Include your header content here -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <!-- Add more navigation items as needed -->
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <!-- Include your footer content here -->
        <p>&copy; {{ date('Y') }} Your App. All rights reserved.</p>
    </footer>

    <!-- Include your JavaScript scripts here -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- You can include more JS files here -->
</body>

</html>