<div>

    <div class="flex justify-start w-full px-4">
        <x-commons.modal btn="crear" btn2="Guardar" title="Crear Tag" submit='save'>
       <x-slot name="content">
           <x-action-message class="mr-3 text-center text-black bg-white" on="created">
               {{ __('Saved.') }}
           </x-action-message>
           <x-label value="URL" class="text-white" />
           <div class="relative">
               <input wire:model='name'  class="block w-11/12 text-sm text-gray-900 border border-gray-600 rounded-lg dark:border-gray-300 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="URL" >
               <x-input-error for="name" class="mt-2" />
           </div>
       </x-slot>
    </x-commons.modal>
    </div>
   

   {{-- ----- TABLE ----- --}}
   <section class="relative overflow-x-auto" >
       <x-commons.table-admin :cols="['name', 'webs', 'actions']" class="max-w-md mx-auto">
           <x-slot name="rows"> 
               @foreach ($tags as $tag)
               <tr class="text-gray-700 bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-gray-400">
                   <td class="px-2 py-2 text-sm">
                        {{$tag->name}}
                   </td>
                   <td class="px-4 py-3 text-sm">
                       {{$tag->webs()->count()}}
                   </td>
                   
                   <td class="px-2 text-xs">
                       <button type="button" wire:confirm='¿Seguro Desea Eliminar {{$tag->name}}?' wire:click='delete({{$tag->id}})' type="button" class="px-3 py-1 mb-1 text-sm font-medium text-white bg-green-700 rounded-lg focus:outline-none hover:bg-green-800 focus:ring-4 focus:ring-red-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">
                            eliminar
                       </button>

                       <button wire:click='setTag({{$tag}})' type="button" class="px-2 py-1 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">actualizar</button>

                   </td>
                 </tr>
               @endforeach

           @if($modal)
            <div  
                   class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center w-full h-screen p-4 overflow-x-hidden overflow-y-auto bg-slate-200 bg-opacity-40 md:inset-0 ">
                   <div class="relative items-center justify-center w-full max-w-2xl max-h-full d-flex">
                       <!-- Modal content -->
                       <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                           <!-- Modal header -->
                           <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                               <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                   Actualizar Tag
                               </h3>
                               <button wire:click='closeModal' type="button" 
                                   class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                                   <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                       fill="none" viewBox="0 0 14 14">
                                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                           stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                   </svg>
                                   <span class="sr-only">Close modal</span>
                               </button>
                           </div>
                           <!-- Modal body -->
                           <div class="p-6 space-y-6">
                            <x-action-message class="mr-3 text-center text-black bg-white" on="created">
                                {{ __('Saved.') }}
                            </x-action-message>
                            <x-label value="URL" class="text-white" />
                            <div class="relative">
                                <input wire:model='name'  class="block w-11/12 text-sm text-gray-900 border border-gray-600 rounded-lg dark:border-gray-300 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="URL" >
                                <x-input-error for="name" class="mt-2" />
                            </div>
                           </div>
                           <!-- Modal footer -->
                           <div
                               class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                               <button type="button" wire:click='update'
                                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                   accept</button>
                               <button type="button"  wire:click='closeModal'
                                   class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                           </div>
                       </div>
                   </div>
               </div>
           @endif
           </x-slot>
           <x-slot name="pagination">
               {{$tags->links()}}
            </x-slot> 
       </x-commons.table-admin>
   </section>
</div>



