<div x-data="{ liked: @entangle('liked') }"  class="p-2 text-center bg-green-800 bg-opacity-25 border-2 border-black shadow-md rounded-xl dark:border-white sm:p-6 shadow-green-600">
    <span wire:click='like({{$web->id}})' @click="liked = !liked" x-text="liked ?  '❤': '🖤'" 
      class="inline-block text-xl transform -translate-x-20 hover:cursor-pointer md:text-3xl">
    </span>
    <div
      class="flex items-center justify-center w-16 h-16 mx-auto transform -translate-y-12 bg-green-400 rounded-full shadow-lg shadow-teal-500/40">
      <img src="{{$web->favicon}}" alt="{{$web->name}}" >
    </div>
    <div class="flex flex-wrap gap-1 overflow-x-auto">
      @foreach ($web->tags as $tag)
      <span class="px-2 text-sm text-white bg-blue-500 border-2 border-blue-900 rounded-md min-h-6">{{$tag->name}}
      </span>
      @endforeach
      <x-badge :type="$web->type"/>
  </div>
    <h1 class="mb-3 text-xl font-medium text-dark dark:text-green-600 lg:px-14 ">
      <a class=" hover:underline" href="{{$web->URL}}" target="_blank">
        {{$web->name}}
      </a>
    </h1>
    
    <p class="px-4 text-gray-200">
      {{$web->description}}
    </p>
  </div>
