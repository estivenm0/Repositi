@props(['title' => ''])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? $title . ' - ': ''}} {{config('app.name', 'Repositi') }}</title>
        <link rel="shortcut icon" href="{{asset('src/repositi.ico')}}" type="image/x-icon">

        <meta name="description" content="Encuentra las herramientas web ideales para tu espacio en línea">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js']) 

        <!-- Styles -->
        @livewireStyles     
        
    </head>
    
    <body class="font-sans antialiased bg-emerald-700 dark:bg-gray-900">
        <x-banner />

        <div class="min-h-scree ">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow dark:bg-gray-600">
                    <div class="px-4 py-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

    </body>
</html>
