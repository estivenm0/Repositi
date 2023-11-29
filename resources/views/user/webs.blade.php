<x-app-layout title="Webs">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Webs') }}
        </h2>
    </x-slot>

    <div class="py-12">
       @livewire('user.Webs')
    </div>
</x-app-layout>