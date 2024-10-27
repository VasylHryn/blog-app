<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vue with Vite</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <navbar></navbar>
        <main class="p-4">
            <h1 class="text-2xl">Добро пожаловать в мой блог!</h1>
        </main>
        <footer-component></footer-component>
    </div>
</body>
</html>
