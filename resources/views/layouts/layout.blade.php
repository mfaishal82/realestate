<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gold Estate - Company Profile</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <style>
            .bg-gradient {
                background: linear-gradient(135deg, #1a1a1a 0%, #333333 100%);
            }
            .hover-scale:hover {
                transform: scale(1.05);
                transition: transform 0.3s ease;
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 bg-gradient">
        <nav class="sticky top-0 z-10 bg-black dark:bg-black flex flex-row justify-center items-center px-[200px] shadow-lg">
            <a href="/"><img decoding="async" src="https://demo.wpdirectorykit.com/real-estate-dark-house/wp-content/uploads/2024/04/logo-2.png" class="w-[220px] h-[50px] filter invert brightness-100" alt="logo"></a>
            <div class="container mx-auto flex justify-center items-center p-4 gap-10">
                <a href="/" class="text-white dark:text-gray-200 hover:opacity-50">Home</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Company</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Profiles</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Services</a>
                <a href="" class="text-white dark:text-gray-200 hover:opacity-50">Contact</a>
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
                    <h1 class="text-white text-[60px] font-bold">Gold Estate</h1>
                    <p class="text-white text-[24px] mt-4">Transforming Real Estate Dreams into Reality</p>
                </div>
            </div>
        </div>

        <div class="relative flex justify-around items-center z-9 w-[80%] h-[100px] bg-[#262318] text-white mx-auto -mt-[50px] rounded-lg shadow-xl">
            <div class="flex items-center gap-2">
                <i class="fas fa-map-marker-alt"></i>
                <span class="hover:underline cursor-pointer">Jl. Baruada, no.50, Jakarta Pusat, Indonesia</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fas fa-envelope"></i>
                <span class="hover:underline cursor-pointer">needhelp@goldestate.com</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fas fa-phone"></i>
                <span class="hover:underline cursor-pointer">+62 1341 3413 1242</span>
            </div>
        </div>

        <main class="container mx-auto px-4 py-16 max-w-[82%]">
            <section class="mb-16">
                <div class="flex flex-row mx-auto justify-between items-center gap-10">
                    <img src="https://demo.wpdirectorykit.com/real-estate-dark-house/wp-content/uploads/2023/03/homepage_content_1-2.jpg" alt="" class="w-[500px] h-[500px] rounded-lg shadow-xl hover-scale">

                    <div>
                        <h2 class="text-white font-semibold text-[15px]">About Property</h2>
                        <h2 class="text-white font-semibold text-[35px] mb-6">Modern Villa With a Spacious Garden</h2>
                        <p class="text-white text-[16px] leading-relaxed mb-6">
                            This stunning modern villa is nestled in a lush, tropical garden, offering a serene and luxurious retreat. With its vibrant architecture, inviting pool, and well-manicured grounds, this property promises an unforgettable experience. Immerse yourself in the tranquil ambiance, enjoy the refreshing breeze and the sound of the gentle waterfall.
                            <br>
                            Whether you're seeking a peaceful getaway or a place to host intimate gatherings, this villa with its spacious garden provides the perfect setting for creating lasting memories.
                            Discover the beauty and comfort of this modern villa, where nature and modern amenities seamlessly blend to offer a truly remarkable living experience. Explore the property further and imagine the possibilities that await.
                        </p>
                        <div class="grid grid-cols-2 gap-4 text-white">
                            <div class="bg-[#262318] p-4 rounded-lg hover-scale cursor-default">
                                <i class="fas fa-trophy text-3xl mb-4"></i>
                                <h3 class="text-xl font-semibold mb-2">10+ Years Experience</h3>
                                <p class="text-sm">Proven track record in real estate excellence</p>
                            </div>
                            <div class="bg-[#262318] p-4 rounded-lg hover-scale cursor-default">
                                <i class="fas fa-globe text-3xl mb-4"></i>
                                <h3 class="text-xl font-semibold mb-2">Global Reach</h3>
                                <p class="text-sm">Connecting clients worldwide with premium properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-16">
                <h2 class="text-white text-center text-[35px] mb-12">Our Services</h2>
                <div class="grid grid-cols-3 gap-8">
                    <div class="bg-[#262318] p-6 rounded-lg text-center hover-scale cursor-default">
                        <i class="fas fa-home text-4xl text-yellow-500 mb-4"></i>
                        <h3 class="text-white text-xl font-semibold mb-4">Property Sales</h3>
                        <p class="text-white text-sm">Comprehensive property listings and sales services</p>
                    </div>
                    <div class="bg-[#262318] p-6 rounded-lg text-center hover-scale cursor-default">
                        <i class="fas fa-key text-4xl text-yellow-500 mb-4"></i>
                        <h3 class="text-white text-xl font-semibold mb-4">Property Management</h3>
                        <p class="text-white text-sm">Professional management of residential and commercial properties</p>
                    </div>
                    <div class="bg-[#262318] p-6 rounded-lg text-center hover-scale cursor-default">
                        <i class="fas fa-chart-line text-4xl text-yellow-500 mb-4"></i>
                        <h3 class="text-white text-xl font-semibold mb-4">Investment Consulting</h3>
                        <p class="text-white text-sm">Strategic real estate investment advice and opportunities</p>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-white text-center text-[35px] mb-12">Our Expert Agent</h2>
                <div class="grid grid-cols-3 gap-8">
                    <div class="bg-[#262318] p-6 rounded-lg text-center hover-scale cursor-default">
                        <img src="https://secure.gravatar.com/avatar/fbc680fbc163811bea4e61ff43cccd59?s=450&d=mm&r=g" alt="Team Member" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-white text-xl font-semibold">John Smith</h3>
                        <p class="text-white text-sm">Agent</p>
                    </div>
                    <div class="bg-[#262318] p-6 rounded-lg text-center hover-scale cursor-default">
                        <img src="https://secure.gravatar.com/avatar/7f119498e0ed4df002f6676e1b8b1b07?s=450&d=mm&r=g" alt="Team Member" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-white text-xl font-semibold">Emily Davis</h3>
                        <p class="text-white text-sm">Agent</p>
                    </div>
                    <div class="bg-[#262318] p-6 rounded-lg text-center hover-scale cursor-default">
                        <img src="https://secure.gravatar.com/avatar/fedf00660c526608cd5c90df793148fb?s=450&d=mm&r=g" alt="Team Member" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-white text-xl font-semibold">Michael Chen</h3>
                        <p class="text-white text-sm">Agent</p>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bottom-0 w-full bg-black dark:bg-black text-white dark:text-gray-200 p-4">
            <div class="container mx-auto grid grid-cols-3 gap-8 max-w-[82%]">
                <div>
                    <h4 class="font-semibold mb-4">Hubungi Kami</h4>
                    <p class="text-sm">+62 1341 3413 1242</p>
                    <p class="text-sm">needhelp@goldestate.com</p>
                    <p class="text-sm">Jl. Baruada, no.50, Jakarta Pusat, Indonesia</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Jam Operasional</h4>
                    <p class="text-sm">Senin - Jumat: 09.00 - 17.00</p>
                    <p class="text-sm">Sabtu: 10.00 - 14.00</p>
                    <p class="text-sm">Minggu: Tutup</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex gap-4">
                        <a href="#" class="hover:opacity-50"><i class="fab fa-facebook text-2xl"></i></a>
                        <a href="#" class="hover:opacity-50"><i class="fab fa-instagram text-2xl"></i></a>
                        <a href="#" class="hover:opacity-50"><i class="fab fa-linkedin text-2xl"></i></a>
                        <a href="#" class="hover:opacity-50"><i class="fab fa-twitter text-2xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center text-sm py-4 border-t border-gray-700">
                Inspired from <a href="https://demo.wpdirectorykit.com/real-estate-dark-house/" target="__blank" class="text-blue-500">Real Estate Dark House by WP Directory Kit</a>
            </div>
        </footer>
        @yield('body')
    </body>
</html>
