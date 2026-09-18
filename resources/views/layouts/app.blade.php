<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>
        <!-- iconofy icon -->
        <script src="https://code.iconify.design/iconify-icon/3.0.2/iconify-icon.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-[#FBF5E1] selection:bg-amber-100 relative">
        <header class="fixed w-full top-0 z-50" >
            <!-- navbar -->
            <livewire:navbar/>
        </header>
        {{ $slot }}
        @livewireScripts
        <!-- footer -->
        <livewire:footer/>
    </body>
</html>
