<section x-data="{ open: false }">
    <!-- Modal toggle -->
    <button @click="open = true"
        class="block px-5 py-2 text-sm font-medium text-center text-white uppercase bg-blue-700 rounded-lg focus:ring-4 focus:outline-none hover:bg-blue-800"
        type="button">
        {{$attributes['btn']}}
    </button>

    <!-- Main modal -->
    <div x-cloak x-show="open"
        class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center w-full h-screen max-h-full px-1 py-10 overflow-x-hidden overflow-y-auto bg-opacity-50 md:p-4 bg-slate-400 md:inset-0">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{$attributes['title']}}
                    </h3>
                    <button type="button"
                        class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-600 hover:text-white"
                        @click="open = false">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form wire:submit.prevent.default='{{$attributes['submit']}}'>
                    <!-- Modal body -->
                    <div class="p-6 mx-auto space-y-2">
                        {{$content}}
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" wire:loading.attr="disabled" wire:loading.class="opacity-50"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            {{$attributes['btn2']}}
                        </button>
                        <button @click="open = false" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>