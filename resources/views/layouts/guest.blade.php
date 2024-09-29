<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Company 1</title>
    
        <!-- Tambahkan favicon -->
        <link rel="icon" href="{{ asset('gaelanlogoapp.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('gaelanlogoapp.png') }}" type="image/x-icon">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="animated-bg bg-cover" style="background-image: url('{{ asset('bgguest.jpg') }}');">
            <div class="w-full sm:max-w-md mt-2 px-4 py-2 bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
                {{ $slot }}
                <a class="text-sm font-dark text-black dark:text-black text-start hover:underline" href="/">&laquo;
                    {{ __('Back') }}
                </a>
            </div>
        </div>
    </body>
</html>
