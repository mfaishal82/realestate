@extends('/layouts/layout')

@section('page-title')
Galleries
@endsection

@section('head-title')
<h1 class="text-white text-[50px] font-bold">Property Profiles</h1>
<p class="text-white text-[20px] mt-4">Explore Our Exclusive Property Collection</p>
@endsection

@section('body')
<main class="container mx-auto px-4 py-16">
    <section class="grid grid-cols-3 gap-8">
        <!-- Property Card 1 -->
        <div class="bg-[#262318] rounded-lg overflow-hidden shadow-lg hover-card">
            <img src="https://demo.wpdirectorykit.com/real-estate-dark-house/wp-content/uploads/2023/03/homepage_content_1-2.jpg" alt="Luxury Villa" class="w-full h-[250px] object-cover">
            <div class="p-6">
                <h3 class="text-white text-2xl font-semibold mb-4">Modern Tropical Villa</h3>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-yellow-500 text-xl font-bold">$1,500,000</span>
                    <span class="text-white bg-yellow-700 px-3 py-1 rounded-full">For Sale</span>
                </div>
                <div class="text-white text-sm mb-4">
                    <p>A stunning modern villa nestled in a lush tropical setting, offering luxury and tranquility.</p>
                </div>
                <div class="flex justify-between text-white">
                    <div class="flex items-center">
                        <i class="fas fa-bed mr-2"></i> 4 Beds
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-bath mr-2"></i> 3 Baths
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-ruler mr-2"></i> 3,500 sqft
                    </div>
                </div>
                <button class="mt-6 w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700 transition">View Details</button>
            </div>
        </div>

        <!-- Property Card 2 -->
        <div class="bg-[#262318] rounded-lg overflow-hidden shadow-lg hover-card">
            <img src="https://a0.muscache.com/im/pictures/hosting/Hosting-1145592447069093322/original/99bec2c1-88a0-486d-ba19-699be5304b99.jpeg?im_w=1200&im_format=avif" alt="Modern Apartment" class="w-full h-[250px] object-cover">
            <div class="p-6">
                <h3 class="text-white text-2xl font-semibold mb-4">Urban Skyline Apartment</h3>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-yellow-500 text-xl font-bold">$750,000</span>
                    <span class="text-white bg-green-700 px-3 py-1 rounded-full">For Rent</span>
                </div>
                <div class="text-white text-sm mb-4">
                    <p>A contemporary apartment with breathtaking city views and state-of-the-art amenities.</p>
                </div>
                <div class="flex justify-between text-white">
                    <div class="flex items-center">
                        <i class="fas fa-bed mr-2"></i> 2 Beds
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-bath mr-2"></i> 2 Baths
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-ruler mr-2"></i> 1,800 sqft
                    </div>
                </div>
                <button class="mt-6 w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700 transition">View Details</button>
            </div>
        </div>

        <!-- Property Card 3 -->
        <div class="bg-[#262318] rounded-lg overflow-hidden shadow-lg hover-card">
            <img src="https://a0.muscache.com/im/pictures/miso/Hosting-50579578/original/d5c4172a-49a9-4490-ae25-5fd09603a090.jpeg?im_w=1200&im_format=avif" alt="Beachfront Condo" class="w-full h-[250px] object-cover">
            <div class="p-6">
                <h3 class="text-white text-2xl font-semibold mb-4">Beachfront Luxury Condo</h3>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-yellow-500 text-xl font-bold">$2,200,000</span>
                    <span class="text-white bg-blue-700 px-3 py-1 rounded-full">Exclusive</span>
                </div>
                <div class="text-white text-sm mb-4">
                    <p>An exclusive beachfront condominium with panoramic ocean views and premium facilities.</p>
                </div>
                <div class="flex justify-between text-white">
                    <div class="flex items-center">
                        <i class="fas fa-bed mr-2"></i> 3 Beds
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-bath mr-2"></i> 3.5 Baths
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-ruler mr-2"></i> 2,800 sqft
                    </div>
                </div>
                <button class="mt-6 w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700 transition">View Details</button>
            </div>
        </div>

        <!-- Additional Property Cards -->
        <div class="bg-[#262318] rounded-lg overflow-hidden shadow-lg hover-card">
            <img src="https://ik.imagekit.io/tvlk/apr-asset/Ixf4aptF5N2Qdfmh4fGGYhTN274kJXuNMkUAzpL5HuD9jzSxIGG5kZNhhHY-p7nw/hotel/asset/67802837-6a5e2f4a4d961cd84472c7764a0b7738.jpeg?_src=imagekit&tr=c-at_max,f-jpg,h-360,pr-true,q-80,w-640" alt="Mountain View Home" class="w-full h-[250px] object-cover">
            <div class="p-6">
                <h3 class="text-white text-2xl font-semibold mb-4">Mountain View Residence</h3>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-yellow-500 text-xl font-bold">$1,800,000</span>
                    <span class="text-white bg-purple-700 px-3 py-1 rounded-full">Investment</span>
                </div>
                <div class="text-white text-sm mb-4">
                    <p>A spacious home with stunning mountain views and potential for high rental returns.</p>
                </div>
                <div class="flex justify-between text-white">
                    <div class="flex items-center">
                        <i class="fas fa-bed mr-2"></i> 5 Beds
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-bath mr-2"></i> 4 Baths
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-ruler mr-2"></i> 4,200 sqft
                    </div>
                </div>
                <button class="mt-6 w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700 transition">View Details</button>
            </div>
        </div>

        <div class="bg-[#262318] rounded-lg overflow-hidden shadow-lg hover-card">
            <img src="https://img.freepik.com/premium-photo/suburban-family-haven_1029476-207989.jpg?w=740" alt="Suburban Family Home" class="w-full h-[250px] object-cover">
            <div class="p-6">
                <h3 class="text-white text-2xl font-semibold mb-4">Suburban Family Haven</h3>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-yellow-500 text-xl font-bold">$950,000</span>
                    <span class="text-white bg-green-700 px-3 py-1 rounded-full">For Sale</span>
                </div>
                <div class="text-white text-sm mb-4">
                    <p>A charming suburban home perfect for families, with spacious rooms and a beautiful backyard.</p>
                </div>
                <div class="flex justify-between text-white">
                    <div class="flex items-center">
                        <i class="fas fa-bed mr-2"></i> 4 Beds
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-bath mr-2"></i> 3 Baths
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-ruler mr-2"></i> 3,200 sqft
                    </div>
                </div>
                <button class="mt-6 w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700 transition">View Details</button>
            </div>
        </div>

        <div class="bg-[#262318] rounded-lg overflow-hidden shadow-lg hover-card">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/338695308.jpg?k=c6ec5c1e4dc6826ed93705f50d82da1c28f608396b3e6727c328952298a313d3&o=&hp=1" alt="Downtown Penthouse" class="w-full h-[250px] object-cover">
            <div class="p-6">
                <h3 class="text-white text-2xl font-semibold mb-4">Downtown Luxury Penthouse</h3>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-yellow-500 text-xl font-bold">$3,500,000</span>
                    <span class="text-white bg-red-700 px-3 py-1 rounded-full">Premium</span>
                </div>
                <div class="text-white text-sm mb-4">
                    <p>An opulent downtown penthouse with unparalleled luxury and breathtaking city panoramas.</p>
                </div>
                <div class="flex justify-between text-white">
                    <div class="flex items-center">
                        <i class="fas fa-bed mr-2"></i> 3 Beds
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-bath mr-2"></i> 3.5 Baths
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-ruler mr-2"></i> 3,500 sqft
                    </div>
                </div>
                <button class="mt-6 w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700 transition">View Details</button>
            </div>
        </div>
    </section>

    <div class="mt-12 text-center">
        <button class="bg-yellow-600 text-white px-8 py-3 rounded-lg hover:bg-yellow-700 transition text-lg">
            Load More Properties
        </button>
    </div>
</main>
@endsection
