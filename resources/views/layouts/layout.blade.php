<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gold Estate - @yield('page-title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="style.css">

    </head>
    <body class="font-sans antialiased ">
        <nav class="sticky top-0 z-10 bg-black dark:bg-black flex flex-row justify-center items-center px-[200px] shadow-lg">
            <a href="/"><img decoding="async" src="https://demo.wpdirectorykit.com/real-estate-dark-house/wp-content/uploads/2024/04/logo-2.png" class="w-[220px] h-[50px] filter invert brightness-100" alt="logo"></a>
            <div class="container mx-auto flex justify-center items-center p-4 gap-10">
                <a href="/" class="text-white dark:text-gray-200 hover:opacity-50">Home</a>
                <a href="/company" class="text-white dark:text-gray-200 hover:opacity-50">Company</a>
                <a href="/profiles" class="text-white dark:text-gray-200 hover:opacity-50">Profiles</a>
                <a href="/galleries" class="text-white dark:text-gray-200 hover:opacity-50">Galleries</a>
                <a href="/contact" class="text-white dark:text-gray-200 hover:opacity-50">Contact</a>
            </div>

            <div>
                <div class="container mx-auto flex justify-center items-center p-4 gap-10">
                    <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Login</a>
                    <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Register</a>
                </div>
            </div>
        </nav>

        <div class="relative z-1">
            <img src="https://wpdirectorykit.com/demo_data/real-estate-dark-house/images_pac/slider_1.jpg" alt="" class="w-full h-[500px] object-cover opacity-70">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    @yield('head-title')
                </div>
            </div>
        </div>

        @yield('body')

        <footer class="footer-container py-16">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 px-[10%]">
                <div>
                    <h4 class="text-xl font-semibold mb-6">Hubungi Kami</h4>
                    <div class="space-y-3">
                        <p class="text-white/80 flex items-center">
                            <i class="fas fa-phone mr-4 text-[#ffd700]"></i>
                            +62 1341 3413 1242
                        </p>
                        <p class="text-white/80 flex items-center">
                            <i class="fas fa-envelope mr-4 text-[#ffd700]"></i>
                            needhelp@goldestate.com
                        </p>
                        <p class="text-white/80 flex items-center">
                            <i class="fas fa-map-marker-alt mr-4 text-[#ffd700]"></i>
                            Jl. Baruada, no.50, Jakarta Pusat, Indonesia
                        </p>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-6">Jam Operasional</h4>
                    <div class="space-y-3">
                        <p class="text-white/80">Senin - Jumat: 09.00 - 17.00</p>
                        <p class="text-white/80">Sabtu: 10.00 - 14.00</p>
                        <p class="text-white/80 text-red-400">Minggu: Tutup</p>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-6">Ikuti Kami</h4>
                    <div class="flex space-x-6">
                        <a href="#" class="social-icon text-3xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon text-3xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon text-3xl"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-icon text-3xl"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center text-sm py-6 border-t border-white/10 mt-8">
                Inspired from <a href="https://demo.wpdirectorykit.com/real-estate-dark-house/" target="_blank" class="text-[#ffd700] hover:underline">Real Estate Dark House by WP Directory Kit</a>
            </div>
        </footer>
    </body>
</html>
