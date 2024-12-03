<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="h-screen flex flex-col justify-between bg-gray-100">
    <header class="bg-blue-700 p-3">

        
        @include('components.navbar')
    </header>
    <main class="h-[100%] bg-gray-100 p-5 overflow-auto">
    @yield('main')
    </main>
    <footer class="bg-blue-700 text-center text-white p-1">Prueba Tecnica Laravel <br>  ANATO© {{date('Y')}}</footer>
</body>
</html>