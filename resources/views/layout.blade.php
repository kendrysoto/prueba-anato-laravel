<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="h-screen flex flex-col justify-between bg-gray-100">
    <header class="bg-blue-700 p-3">
      <div> 
        <a href="/">
          <img src="https://dev.anato.org/img/logo-anato-horizontal.png" alt="" class="w-36 bg-white rounded p-1">
        </a>
      </div>
        
    </header>
    	
    <main class="h-[100%] bg-gray-100 p-5">
    @yield('main')
    </main>
    <footer class="bg-blue-700 text-center text-white p-1">Prueba Tecnica Laravel <br>  ANATO© {{date('Y')}}</footer>
</body>
</html>