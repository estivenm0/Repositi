<x-guest-layout>
  <main class="p-4">
    <nav>
      <div class="p-1 rounded-xl"
        style="background-image: linear-gradient(to right bottom, rgb(70, 229, 123) 0%, rgb(56, 165, 110) 50%, rgb(42, 112, 12) 100%);">
        <div class="rounded-lg bg-black/80 backdrop-blur">
          <div class="flex flex-wrap items-center justify-between w-full gap-4 px-8 py-10 sm:px-16 lg:flex-nowrap">
            <div class="lg:max-w-xl">
              <h2
                class="block w-full pb-2 text-3xl font-bold text-transparent bg-gradient-to-b from-white to-gray-400 bg-clip-text sm:text-4xl">
                Únete a nosotros y descubre un mundo de posibilidades en nuestra web.
              </h2>
            </div>
            <div class="flex flex-wrap items-center justify-center sm:gap-6 ">
              @if (Route::has('register'))
              <a href="{{ route('register') }}"
                class="px-10 py-3 mb-2 mr-2 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 ">Unirme</a>
              @endif
              @if (Route::has('login'))
              <a href="{{ route('login') }}"
                class="px-10 py-3 mb-2 mr-2 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80">Ingresar</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </nav>


    <form x-data="{ selectedOption: '' }" class="flex flex-wrap items-center justify-center m-2 mx-auto sm:w-10/12"
      action="{{ route('wuest') }}" method="get">
      <label class="text-xl font-semibold" for="tag">Selecciona:</label>
      <select x-model="selectedOption" @change="redirigir(selectedOption)" name="tag" id="tag"
        class="max-w-full rounded-full hover:cursor-pointer">
        <option value="">{{$tag? $tag: 'Todas las etiquetas' }}</option>
        @foreach ($tags as $tag)
        <option value="{{route('wuest', $tag->name)}}">
          {{$tag->name}}
        </option>
        @endforeach
      </select>
    </form>
    <script>
      function redirigir(selectedOption) {
              if (selectedOption) {
                  window.location.href = selectedOption;
              }
          }
    </script>


    <section class=" sm:w-10/12 lg:w-[70%] mx-auto  pt-12 p-4">
      <div class="relative grid justify-center gap-14 md:grid-cols-2 md:gap-5">

        @if(count($webs)>0)
        @foreach ($webs as $sample)
        <div class="p-2 text-center bg-green-800 bg-opacity-25 border-2 border-black shadow-xl rounded-xl sm:p-6">
          <div
            class="flex items-center justify-center w-16 h-16 mx-auto transform -translate-y-12 bg-green-400 rounded-full shadow-lg shadow-teal-500/40">
            <img src="{{$sample->favicon}}" alt="{{$sample->name}}">
          </div>
          <div class="flex flex-wrap gap-1 overflow-x-auto">
            @foreach ($sample->tags as $tag)
            <span class="px-2 text-sm text-white bg-blue-500 border-2 border-blue-900 rounded-md min-h-6">
              {{$tag->name}}
            </span>
            @endforeach
            <x-badge :type="$sample->type" />
          </div>
          <h1 class="mb-3 text-xl font-medium text-darken lg:px-14 ">
            <a class="hover:underline" href="{{$sample->URL}}">{{$sample->name}}</a>
          </h1>

          <p class="px-4 text-gray-200">
            {{$sample->description}}
          </p>
        </div>
        @endforeach
        @else
        <div class="absolute flex justify-center w-full text-center">
          <span
            class="p-4 text-sm font-medium text-blue-800 rounded-lg bg-blue-50 dark:text-blue-400 dark:bg-gray-800 ">NO
            SE ENCONTRARON ELEMENTOS
          </span>
        </div>
        @endif
      </div>
      <div class="p-2 mt-2 rounded-md bg-emerald-400">
        {{$webs->links()}}
      </div>
    </section>

  </main>
</x-guest-layout>