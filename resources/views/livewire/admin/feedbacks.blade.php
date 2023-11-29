<div>
  
    <div class="relative overflow-x-auto" >
        <x-commons.table-admin :cols="['user', 'title', 'content', 'created', 'actions']" class="">
            <x-slot name="rows"> 
                @foreach ($feedbacks as $feedback)
                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                    <td class="px-2 py-2 text-sm">
                         {{$feedback->user->nickname}}
                    </td>
                    <td class="px-2 py-2 text-sm">
                         {{$feedback->type}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$feedback->content}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        Hace: {{Illuminate\Support\Carbon::now()->diffInDays($feedback->created_at)}} días
                    </td>
                    
                    <td class="px-2 text-xs">
                        <button type="button" wire:confirm='¿Seguro Desea Eliminar el Feedback de {{$feedback->user->nickname}}?' wire:click='delete({{$feedback->id}})' type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 mb-1 py-1  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">
                             eliminar
                        </button>
                    </td>
                  </tr>
                @endforeach
                
            </x-slot> 
            <x-slot name="pagination">
                {{$feedbacks->links()}}
             </x-slot> 
        </x-commons.table-admin>
    </div>
 </div>
 
 
 
 
