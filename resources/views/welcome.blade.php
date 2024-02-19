<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
     
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

            
         
                <div class="bg-gray-800 text-white rounded-lg p-4 shadow">
                    <div class="text-xl font-semibold">150</div>
                    <p class="text-gray-300">New Orders</p>
                </div>
       
            
            
              
                
       
     
    </body>
</html>
