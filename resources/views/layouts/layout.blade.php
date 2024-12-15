<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gold Estate</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav class="sticky top-0 z-10 bg-black dark:bg-black flex flex-row justify-center items-center px-[200px]">
            <a href="/"><img decoding="async" src="https://demo.wpdirectorykit.com/real-estate-dark-house/wp-content/uploads/2024/04/logo-2.png" class="w-[220px] h-[50px] filter invert brightness-100" alt="logo"></a>
            <div class="container mx-auto flex justify-center items-center p-4 gap-10">
                <a href="/" class="text-white dark:text-gray-200 hover:opacity-50">Home</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Profiles</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Contact</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">About</a>
            </div>

            <div>
                <div class="container mx-auto flex justify-center items-center p-4 gap-10">
                    <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Login</a>
                    <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Register</a>
                </div>
            </div>
        </nav>
        <div class="relative z-1">
            <img src="https://wpdirectorykit.com/demo_data/real-estate-dark-house/images_pac/slider_1.jpg" alt="" class="w-full h-[500px] object-cover">
            <div class="absolute inset-0 flex items-center justify-center">
                <span class="text-white text-[80px] font-bold border-b border-yellow-100"><span class="text-[15px]">MODERN APARTMENT</span> <br> VILLA BLUE AND GREEN HVAR</span>
            </div>
        </div>

        <div class="relative flex justify-around items-center z-9 w-[80%] h-[100px] bg-[#262318] text-white mx-auto -mt-[50px]">
                <div class="flex items-center gap-2">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="hover:underline cursor-pointer">80 Broklyn Blueen Street, New York. USA</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-envelope"></i>
                    <span class="hover:underline cursor-pointer">needhelp@example.com</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-phone"></i>
                    <span class="hover:underline cursor-pointer">+385 999 666 9999</span>
                </div>
        </div>

        <main>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
        </main>
        <footer class="bottom-0 w-full bg-black dark:bg-black text-white dark:text-gray-200 p-4">
            <div class="container mx-auto flex justify-center items-center p-4 gap-10">
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Home</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Profiles</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Contact</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">About</a>
            </div>

        </footer>
        @yield('body')
    </body>
</html>