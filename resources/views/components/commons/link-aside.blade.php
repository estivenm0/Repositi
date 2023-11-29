@props(['active'])

@php
$classes = ($active ?? false)
            ? 'relative flex flex-row items-center h-11 focus:outline-none bg-blue-800 dark:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6'
            : 'relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6';
@endphp

<a  {{ $attributes->merge(['class' => $classes]) }} wire:navigate>
    <span class="inline-flex justify-center items-center ml-4">
      {{$icon}}
    </span>
    <span class="ml-2 text-sm tracking-wide truncate">{{$attributes['text']}}</span>
</a>