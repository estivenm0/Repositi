<div class=" w-full max-w-md p-4 border bg-green-600 border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    
    <div class="flex items-center justify-between mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Favoritos</h5>
        <x-commons.modal title="Recomendar Web"
        btn="Recomendar Web" btn2="enviar" submit='saveFeedback' >
             <x-slot name="content">
                <x-action-message class="mr-3 text-center bg-white text-black" on="created">
                    {{ __('Enviado') }}
                </x-action-message>
                <div class="w-11/12">
                    <x-label value="Contenido" class="text-white" />
                    <textarea wire:model='form.content' rows="4" class="block p-2  w-full text-sm text-gray-900 bg-gray-700 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="URL de la web o contenido de recomendación (también puede escribir una crítica)."></textarea>
                    <x-input-error for="form.content" class="mt-2" />
                </div>
            </x-slot>
        </x-commons.modal>
   </div>

   <div class="h-[60vh]  ">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 max-h-full overflow-y-scroll">
        @forelse ($webs as $web)
            <li class="py-3 sm:py-4 pr-2">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="{{$web->favicon}}" alt="{{$web->name}}">
                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="{{$web->URL}}" title="{{$web->name}}" target="_blank" class="block text-sm font-medium text-gray-900 truncate dark:text-white">
                           {{$web->name}}
                        </a>
                    </div>
                    <button wire:click='remove({{$space->id}}, {{$web->web_id}})' class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white hover:bg-red-400">
                        ❌
                    </button>
                </div>
            </li>
            @empty
        </ul>
            <p class="px-8 py-3 text-center mt-5 font-semibold rounded-full dark:bg-gray-100 dark:text-gray-800">
                Sin Elementos
            </p>
        @endforelse
        {{$webs->links()}}
   </div>
</div>

