<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ $title ?? config('app.name') }} - Egxa Dashboard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('styles')
    </head>

    <body>
        {{-- BEGIN HEADER --}}
        @include('components.header')
        {{-- END HEADER --}}

        {{-- BEGIN SIDEBAR --}}
        @include('components.sidebar')
        {{-- END SIDEBAR --}}

        <div class="p-4 sm:ml-64">
            <!-- BEGIN CONTENT -->
            @yield('content')
            <!-- END CONTENT -->
        </div>

        @stack('scripts')
    </body>
</html>
