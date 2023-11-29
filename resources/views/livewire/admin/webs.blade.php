<div>

    <div class="flex justify-start w-full px-4">
         <x-commons.modal btn="crear" btn2="Guardar" title="Crear Web" submit='save'>
        <x-slot name="content">
            <x-action-message class="mr-3 text-center text-black bg-white" on="created">
                {{ __('Saved.') }}
            </x-action-message>
            <x-action-message class="mr-3 text-center text-black bg-white" on="scraped">
                {{ __('Scraped.') }}
            </x-action-message>
            <x-label value="URL" class="text-white" />
            <div class="relative">
                <input wire:model='form.URL'
                    class="block w-11/12 text-sm text-gray-900 border border-gray-600 rounded-lg dark:border-gray-300 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="URL">
                <x-input-error for="form.URL" class="px-4 mt-2 bg-gray-400 rounded-md" />
                <button type="button" wire:loading.attr="disabled" wire:click='scrape'
                    class="absolute top-0 right-0 px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    wire:loading.class="opacity-50">🕷</button>
            </div>
            <div class="flex flex-wrap gap-2">
                <div>
                    <x-label value="Name" class="text-white" />
                    <x-input wire:model='form.name' class="bg-gray-700" />
                    <x-input-error for="form.name" class="px-2 mt-2 bg-gray-400 rounded-md" />
                </div>
                <div>
                    <x-label value="Favicon" class="text-white" />
                    <x-input wire:model='form.favicon' class="bg-gray-700" />
                    <x-input-error for="form.favicon" class="px-2 mt-2 bg-gray-400 rounded-md" />
                </div>
                <div>
                    <x-label value="Type" class="text-white" />
                    <select name="type" wire:model='form.type' class="w-24 bg-gray-700 rounded-md">
                        <option value="">{{$form->type}}</option>
                        <option class="font-semibold text-green-600" value="free">free</option>
                        <option class="font-semibold text-red-300" value="pay">pay</option>
                        <option class="font-semibold text-orange-600" value="freemium">freemium</option>
                        <option class="font-semibold text-sky-600" value="trial">trial</option>
                    </select>
                    <x-input-error for="form.type" class="px-2 mt-2 bg-gray-400 rounded-md" />
                </div>
                <div>
                    <x-label value="Tags" class="text-white" />
                    <x-input id="tag" wire:model='form.tag' class="bg-gray-700" list="tags" />
                    <x-input-error for="form.tag" class="mt-2" />
                    <button type="button" wire:click='addTag' wire:loading.attr='disabled'
                        class="px-2 py-1 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        wire:loading.class="opacity-50">✅</button>
                </div>
                <datalist id="tags">
                    @foreach ($tags as $index => $tag)
                    <option value="{{$index}}">{{$tag->name}}</option>
                    @endforeach
                </datalist>

                <div class="flex flex-wrap gap-1 overflow-x-auto space">
                    @foreach ($inpTags as $index=> $tag)
                    <span class="h-6 px-2 text-white bg-blue-500 rounded-md">{{$tag->name}}
                        <span wire:click='removeTag({{$index}})'
                            class="px-1 bg-red-600 rounded-full hover:cursor-pointer">X</span>
                    </span>
                    @endforeach
                </div>

                <div class="w-11/12">
                    <x-label value="Description" class="text-white" />
                    <textarea wire:model='form.description' rows="4"
                        class="block w-full p-2 text-sm text-gray-900 bg-gray-700 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Description..."></textarea>
                    <x-input-error for="form.description" class="mt-2" />
                </div>
            </div>
        </x-slot>
    </x-commons.modal>
    </div>
   


    <div class="relative overflow-x-auto">
        <x-commons.table-admin :cols="['name', 'description', 'favicon', 'tags', 'active', 'actions']">
            <x-slot name="rows">
                @foreach ($webs as $web)
                <tr
                    class="text-gray-700 bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-gray-400">
                    <td class="px-2 py-2 text-sm">
                        <a href="{{$web->URL}}">{{$web->name}}</a>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$web->description ? $web->description : '---'}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <img width="30px" src="{{$web->favicon}}" title="{{$web->favicon}}">
                    </td>
                    <td class="px-2 py-2 text-sm">
                        <div class="flex flex-wrap gap-1 overflow-x-auto space">
                            @foreach ($web->tags as $tag)
                            <span class="px-2 text-white bg-blue-500 rounded-md min-h-6">{{$tag->name}}
                            </span>
                            @endforeach
                            <x-badge :type="$web->type" />
                        </div>
                    </td>
                    <td class="px-1 py-1 text-xs text-center">
                        {{$web->active ? '✔' : '❌'}}
                    </td>
                    <td class="px-2 text-xs">
                        <button wire:click='active({{$web->id}})' type="button"
                            class="px-3 py-1 mb-1 text-sm font-medium text-white  rounded-lg  focus:ring-4  hover:bg-zinc-500 focus:ring-gray-900 {{$web->active? 'bg-red-700': 'bg-green-700'}}">
                            {{$web->active? 'Desactivar' : 'Activar'}}
                        </button>

                        <button wire:click='setWeb({{$web}})' type="button"
                            class="px-2 py-1 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">actualizar</button>

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
                                    Actualizar Web
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
                                <x-label value="URL" class="text-white" />
                                <div class="relative">
                                    <input wire:model='form.URL'
                                        class="block w-11/12 text-sm text-gray-900 border border-gray-600 rounded-lg dark:border-gray-300 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="URL">
                                    <x-input-error for="form.URL" class="mt-2" />
                                    <button type="button" wire:click='scrape'
                                        class="absolute top-0 right-0 px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">🕷</button>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <div>
                                        <x-label value="Name" class="text-white" />
                                        <x-input wire:model='form.name' class="bg-gray-700" />
                                        <x-input-error for="form.name" class="mt-2" />
                                    </div>
                                    <div>
                                        <x-label value="Favicon" class="text-white" />
                                        <x-input wire:model='form.favicon' class="bg-gray-700" />
                                        <x-input-error for="form.favicon" class="mt-2" />
                                    </div>
                                    <div>
                                        <x-label value="Type" class="text-white" />
                                        <select name="tag" wire:model='form.type' class="w-24 bg-gray-700 rounded-md">
                                            <option value="NULL">Type</option>
                                            <option class="bg-green-600 " value="free">free</option>
                                            <option class="bg-red-600 " value="pay">pay</option>
                                            <option class="bg-orange-600 " value="freemium">freemium</option>
                                            <option class="bg-sky-600 " value="trial">trial</option>
                                        </select>
                                        <x-input-error for="form.type" class="mt-2" />
                                    </div>
                                    <div>
                                        <x-label value="Tags" class="text-white" />
                                        <x-input id="tag" wire:model='form.tag' class="bg-gray-700" list="tags" />
                                        <x-input-error for="form.tag" class="mt-2" />
                                        <button type="button" wire:click='addTag'
                                            class="px-2 py-1 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">✅</button>
                                    </div>
                                    <datalist id="tags">
                                        @foreach ($tags as $index => $tag)
                                        <option value="{{$index}}">{{$tag->name}}</option>
                                        @endforeach
                                    </datalist>

                                    <div class="flex flex-wrap gap-1 overflow-x-auto space">
                                        @foreach ($inpTags as $index=> $tag)
                                        <span class="h-6 px-2 text-white bg-blue-500 rounded-md">{{$tag->name}}
                                            <span wire:click='removeTag({{$index}})'
                                                class="px-1 bg-red-600 rounded-full hover:cursor-pointer">X</span>
                                        </span>
                                        @endforeach
                                    </div>

                                    <div class="w-11/12">
                                        <x-label value="Description" class="text-white" />
                                        <textarea wire:model='form.description' rows="4"
                                            class="block w-full p-2 text-sm text-gray-900 bg-gray-700 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Description..."></textarea>
                                        <x-input-error for="form.description" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button type="button" wire:click='update'
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
                                <button type="button" wire:click='closeModal'
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </x-slot>

            <x-slot name="pagination">
                {{$webs->links()}}
            </x-slot>
        </x-commons.table-admin>
    </div>
</div>