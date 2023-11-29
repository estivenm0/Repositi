<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Repositi</title>
  <link rel="shortcut icon" href="{{ asset('src/repositi.ico') }}" type="image/x-icon">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased  bg-gradient-to-r from-emerald-800 via-emerald-500 to-emerald-800">
  <header
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center   selection:text-dark">
    {{-- ------ NAV -------- --}}
    @if (Route::has('login'))
    <nav class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
      @auth
      <a href="{{ route('dashboard') }}"
        class="text-white bg-gradient-to-r from-emerald-400 via-emerald-500 to-emerald-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Inicio</a>
      @else
      <a href="{{ route('register') }}"
        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Unirme</a>

      @if (Route::has('register'))
      <a href="{{ route('login') }}"
        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ingresar</a>
      @endif
      @endauth
    </nav>
    @endif

    {{-- Header section --}}
    <div class="flex flex-wrap">
      <div class="w-full sm:w-8/12 mb-10">
        <div class="container mx-auto h-full sm:p-10">
          <div class="flex px-4 justify-between items-center">
            <div class="bg-black flex items-center justify-center">
              <h1 class="text-2xl p-1 font-bold">
                <span class="text-green-400 animate-pulse ">REPOSITI</span>
              </h1>
            </div>
          </div>
          <section class="container px-4 lg:flex mt-10 items-center h-full lg:mt-0">
            <div class="w-full">
              <h1 class="text-4xl lg:text-6xl font-bold">Encuentra las
                <span class="text-green-400">herramientas web</span>
                ideales para tu espacio en línea
              </h1>
              <div class="w-20 h-2 bg-green-400  my-4"></div>
              <p class="text-xl mb-10 font-medium">
                Aquí, encontrarás una cuidada selección de herramientas web y recursos esenciales.
                Nuestro objetivo es
                simplificar tu experiencia en línea, proporcionándote soluciones y conocimientos que
                marcan la
                diferencia. Explora y descubre todo lo que necesitas para triunfar en el mundo digital.
              </p>
              <a href="{{ route('about.show') }}" target="_blank" class="bg-green-500 text-white text-2xl font-medium px-4 py-2 rounded shadow hover:animate-pulse
              ">Leer
                Más</a>
            </div>
          </section>
        </div>
      </div>
      <img src="{{ asset('src/banner.webp') }}" alt="Repositi" class="w-full h-48 object-cover sm:h-screen sm:w-4/12">
    </div>
  </header>



  {{-- Details --}}
  <section class="md:h-screen w-full py-5  shadow-[inset_0_5px_60px_-15px_] shadow-black ">

    {{-- ----- Counts ----- --}}
    <div class="grid grid-cols-1 gap-4 px-4 mx-auto sm:grid-cols-3 sm:px-8">
      <div class="flex items-center bg-green-900 bg-opacity-25 border border-green-700 rounded-sm overflow-hidden 
      shadow-xl shadow-green-700">
        <div class="p-4 bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
            </path>
          </svg></div>
        <div class="px-4 text-white">
          <h3 class="text-sm tracking-wider">Usuarios</h3>
          <p class="text-3xl">{{ $users }}</p>
        </div>
      </div>
      <div class="flex items-center bg-green-900 bg-opacity-25 border border-green-700 rounded-sm overflow-hidden 
      shadow-xl shadow-green-700">
        <div class="p-4 bg-green-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
            </path>
          </svg></div>
        <div class="px-4 text-white">
          <h3 class="text-sm tracking-wider">Webs</h3>
          <p class="text-3xl">{{ $webs }}</p>
        </div>
      </div>
      <div class="flex items-center bg-green-900 bg-opacity-25 border border-green-700 rounded-sm overflow-hidden 
      shadow-xl shadow-green-700">
        <div class="p-4 bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
            </path>
          </svg></div>
        <div class="px-4 text-white">
          <h3 class="text-sm tracking-wider">Tipos</h3>
          <p class="text-3xl">{{ $tags }}</p>
        </div>
      </div>
    </div>

    <div class="  w-full pt-12 p-4">
      <div class="grid gap-14 md:grid-cols-3 md:gap-5">

        @foreach ($samples as $sample)
        <div class="rounded-xl border-black border-2 bg-green-800 bg-opacity-25 p-6 text-center shadow-xl">
          <div
            class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-green-400 shadow-lg shadow-teal-500/40">
            <img src="{{ $sample->favicon }}" alt="{{ $sample->name }}">
          </div>
          <div class="flex flex-wrap overflow-x-auto space  gap-1">
            @foreach ($sample->tags as $tag)
            <span class="px-2 min-h-6  bg-blue-500 text-white rounded-md">{{ $tag->name }}
            </span>
            @endforeach
          </div>
          <h1 class="text-darken mb-3 text-xl font-medium lg:px-14 ">
            <a class="hover:underline" href="{{ $sample->URL }}" target="_blank">{{ $sample->name }}</a>
          </h1>

          <p class="px-4 text-gray-200">
            {{ $sample->description }}
          </p>
        </div>
        @endforeach
      </div>
      <div class="w-full flex justify-center mt-5">
        <a href="{{ route('wuest') }}" type="button"
          class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium focus:outline-none rounded-full border hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600 dark:hover:text-white hover:bg-gray-700">Ver
          Más</a>
      </div>
    </div>
  </section>


  {{-- end --}}
  <section class="hover:animate-pulse ">
    <div
      class="mx-auto hover:bg-emerald-700 max-w-sm mt-20 border-4 border-gray-900 dark:border-indigo-400 shadow-xl shadow-emerald-500 rounded-md  p-4 md:p-6 flex flex-col items-center justify-center text-center">

      <p class="text-indigo-900 text-xl md:text-2xl font-bold border-b-4 border-b-indigo-300">
        Repositi
      </p>

      <ul class="flex flex-row items-center justify-center text-center mt-5">
        <img src="{{ asset('src/repositi.ico') }}" alt="" class="rounded-md  ">
      </ul>
    </div>
  </section>


  <x-commons.footer />
</body>
</html>