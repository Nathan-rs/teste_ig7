<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="../"> --}}
    @vite('resources/js/app.js')
    <title>Teste PHP IG7-Sistemas</title>
</head>
<body>
    <div class="wrapper">
        @include('layouts.sidebar')
        @yield('content')
    </div>
</body>
</html>
