<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>App</title>
</head>
<body>
    <div class="wrapper">
        @include('layouts.sidebar')
        @yield('content')
    </div>
    <script src="https://kit.fontawesome.com/1cf9deb2be.js" crossorigin="anonymous"></script>
</body>
</html>
