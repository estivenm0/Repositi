<div>
  <div class=" sm:w-10/12 lg:w-[70%] mx-auto  pt-10 p-4">
    {{-- FILTERS --}}
    <section class="flex flex-wrap w-full">
      <div class="flex flex-wrap items-center justify-center w-full m-2 mx-auto md:max-w-md">
        <label class="text-xl font-semibold text-white" for="tag">Selecciona:</label>
        <select wire:model.live='selectTag' name="tag" id="tag" class="max-w-full rounded-full">
          <option disabled value="">{{ 'Todas las etiquetas' }}</option>
          @foreach ($tags as $tag)
          <option value="{{$tag->name}}">
            {{$tag->name}}
          </option>
          @endforeach
        </select>
      </div>

      <div class="flex flex-wrap items-center justify-center m-2 mx-auto ">
        <label class="text-xl font-semibold text-white" for="type">Selecciona:</label>
        <select wire:model.live='type' name="type" id="type" class="max-w-full rounded-full">
          <option value="">{{ 'Todos los tipos' }}</option>
          <option value="free">free</option>
          <option value="pay">pay</option>
          <option value="freemium">freemium</option>
          <option value="trial">trial</option>
        </select>
      </div>
    </section>
    {{-- /FILTERS --}}

    {{-- ---- SELECTEDS ----- --}}
    <div class="w-full ">
      @foreach ($selecteds as $index=> $name)
      <span class="h-6 p-1 mx-1 text-white bg-blue-500 rounded-md">{{$name}}
        <span wire:click='removeTag({{$index}})' class="px-1 bg-red-600 rounded-full hover:cursor-pointer">X</span>
      </span>
      @endforeach
    </div>
    {{-- ------- /SELECTEDS ------ --}}


    {{-- ----- SEARCH ------- --}}
    <div class="relative text-gray-600">
      <input type="search" name="serch" wire:model.live='search' placeholder="buscar"
        class="absolute top-0 right-0 h-10 px-5 pr-10 text-sm bg-white rounded-full focus:outline-none">
      <button type="submit" class="absolute top-0 right-0 mt-3 mr-4">
        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966"
          style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
          <path
            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
        </svg>
      </button>
    </div>
    {{-- --- ./SEARCH ---- --}}


    {{-- ORDER BY --}}
    <div class="flex items-center my-2 dark:bg-gray-900 dark:text-gray-100">
      <button @disabled($sort==='desc' ) wire:click="$set('sort', 'desc')" class="{{$sort === 'desc' ? 'dark:border-emerald-400 dark:text-emerald-400' : 'dark:border-gray-700'}}
      hover:cursor-pointer px-5 py-1 border-b-2">
        Recientes
      </button>
      <button @disabled($sort==='asc' ) wire:click="$set('sort', 'asc')" class="{{$sort === 'asc' ? 'dark:border-emerald-400 dark:text-emerald-400' : 'dark:border-gray-700'}}
      hover:cursor-pointer px-5 py-1 border-b-2">
        Antiguos
      </button>
    </div>
    {{-- ./ORDER BY --}}


    <div class="grid justify-center gap-14 md:grid-cols-2 md:gap-5">

      @if(count($this->webs)>0)
      @foreach ($this->webs as $web)
      @livewire('user.Web', ['web' => $web, key($web->id), 'lazy'=>true] )
      @endforeach
      @else
      <div class="flex justify-center w-full text-center ">
        <span
          class="p-4 text-sm font-medium text-blue-800 rounded-lg bg-blue-50 dark:text-blue-400 dark:bg-gray-800 ">NO
          SE ENCONTRARON ELEMENTOS</span>
      </div>
      @endif
    </div>
    <div class="bg-emerald-400 w-full mt-3 p-1 rounded-lg">
      {{$this->webs->links()}}
    </div>
  </div>
</div>