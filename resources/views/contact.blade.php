@extends('/layouts/layout')

@section('page-title')
Contact Us
@endsection

@section('head-title')
<h1 class="text-white text-[60px] font-bold">Contact Us</h1>
<p class="text-white text-[24px] mt-4">We're Here to Help You</p>
@endsection

@section('body')
<main class="container mx-auto px-4 py-16 max-w-[82%]">
    <div class="grid grid-cols-2 gap-12">
        <div class="bg-[#262318] p-8 rounded-lg">
            <h2 class="text-white text-[35px] mb-6">Get In Touch</h2>
            <form class="space-y-6">
                <div>
                    <label for="name" class="block text-white mb-2">Your Name</label>
                    <input type="text" id="name" name="name" required class="w-full bg-black/30 text-white p-3 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>
                <div>
                    <label for="email" class="block text-white mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required class="w-full bg-black/30 text-white p-3 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>
                <div>
                    <label for="phone" class="block text-white mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="w-full bg-black/30 text-white p-3 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>
                <div>
                    <label for="message" class="block text-white mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="5" required class="w-full bg-black/30 text-white p-3 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
                </div>
                <button type="submit" class="w-full bg-yellow-500 text-black p-4 rounded-lg hover:bg-yellow-600 transition duration-300 hover-scale">
                    Send Message
                </button>
            </form>
        </div>

        <div class="space-y-8">
            <div class="bg-[#262318] p-6 rounded-lg hover-scale">
                <div class="flex items-center gap-4 mb-4">
                    <i class="fas fa-map-marker-alt text-yellow-500 text-3xl"></i>
                    <h3 class="text-white text-xl font-semibold">Our Address</h3>
                </div>
                <p class="text-white">Jl. Baruada, no.50, Jakarta Pusat, Indonesia</p>
            </div>

            <div class="bg-[#262318] p-6 rounded-lg hover-scale">
                <div class="flex items-center gap-4 mb-4">
                    <i class="fas fa-phone text-yellow-500 text-3xl"></i>
                    <h3 class="text-white text-xl font-semibold">Phone</h3>
                </div>
                <p class="text-white">+62 1341 3413 1242</p>
                <p class="text-white">+62 8765 4321 9876</p>
            </div>

            <div class="bg-[#262318] p-6 rounded-lg hover-scale">
                <div class="flex items-center gap-4 mb-4">
                    <i class="fas fa-envelope text-yellow-500 text-3xl"></i>
                    <h3 class="text-white text-xl font-semibold">Email</h3>
                </div>
                <p class="text-white">needhelp@goldestate.com</p>
                <p class="text-white">support@goldestate.com</p>
            </div>

            <div class="bg-[#262318] p-6 rounded-lg hover-scale">
                <div class="flex items-center gap-4 mb-4">
                    <i class="fas fa-clock text-yellow-500 text-3xl"></i>
                    <h3 class="text-white text-xl font-semibold">Office Hours</h3>
                </div>
                <p class="text-white">Monday - Friday: 09:00 - 17:00</p>
                <p class="text-white">Saturday: 10:00 - 14:00</p>
                <p class="text-white">Sunday: Closed</p>
            </div>
        </div>
    </div>
</main>
@endsection
