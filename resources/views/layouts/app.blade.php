<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <!-- Подключаем стили (например, Bootstrap) -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Подключаем компонент Navbar.vue -->
        <navbar></navbar>

        <div class="container mt-4">
            @yield('content')
        </div>

        <!-- Подключаем компонент Footer.vue -->
        <footer-component></footer-component>
    </div>

    <!-- Подключаем скрипты -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
