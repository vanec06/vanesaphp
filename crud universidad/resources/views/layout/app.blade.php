<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
<body>
    <header>
        <nav class="bg-gray-500">
            <div class="container mx-auto flex justify-between items-center ">
         <h1 class="text-5xl  text-white">Universidad</h1>


                <ul class="flex space-x-4">
                    <li><a href="/" class="text-white p-3 hover:bg-gray-300  text-2xl ">Inicio</a></li>
                    <li><a href="{{ route('registrar') }}" class="text-white p-3 hover:bg-gray-300  text-2xl">Registrar Usuario</a></li>
                    <li><a s class="text-white p-3 hover:bg-gray-300  text-2xl">Listar</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
        <div class="text-center">
            @yield('contenido')
        </div>
    </main>
</body>
</html>
