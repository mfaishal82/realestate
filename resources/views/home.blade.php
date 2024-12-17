@extends('/layouts/layout')

@section('page-title')
Home
@endsection

@section('head-title')
    <h1 class="text-white text-[60px] font-bold">GOLD ESTATE</h1>
    <p class="text-white text-[24px] mt-4">Transforming Real Estate Dreams into Reality</p>
@endsection

@section('body')
@include('sections.contact-info')
<main class="container mx-auto px-4 py-16 max-w-[82%]">
    <section class="mb-16">
        <div class="flex flex-row mx-auto justify-between items-center gap-10">
            <img src="https://demo.wpdirectorykit.com/real-estate-dark-house/wp-content/uploads/2023/03/homepage_content_1-2.jpg"
                alt="" class="w-[500px] h-[500px] rounded-lg shadow-xl hover-scale">

            <div>
                <h2 class="text-white font-semibold text-[15px]">About Property</h2>
                <h2 class="text-white font-semibold text-[35px] mb-6">Modern Villa With a Spacious Garden</h2>
                <p class="text-white text-[16px] leading-relaxed mb-6">
                    This stunning modern villa is nestled in a lush, tropical garden, offering a serene and luxurious
                    retreat. With its vibrant architecture, inviting pool, and well-manicured grounds, this property
                    promises an unforgettable experience. Immerse yourself in the tranquil ambiance, enjoy the refreshing
                    breeze and the sound of the gentle waterfall.
                    <br>
                    Whether you're seeking a peaceful getaway or a place to host intimate gatherings, this villa with its
                    spacious garden provides the perfect setting for creating lasting memories.
                    Discover the beauty and comfort of this modern villa, where nature and modern amenities seamlessly blend
                    to offer a truly remarkable living experience. Explore the property further and imagine the
                    possibilities that await.
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
                <img src="https://secure.gravatar.com/avatar/fbc680fbc163811bea4e61ff43cccd59?s=450&d=mm&r=g"
                    alt="Team Member" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-white text-xl font-semibold">John Smith</h3>
                <p class="text-white text-sm">Agent</p>
            </div>
            <div class="bg-[#262318] p-6 rounded-lg text-center hover-scale cursor-default">
                <img src="https://secure.gravatar.com/avatar/7f119498e0ed4df002f6676e1b8b1b07?s=450&d=mm&r=g"
                    alt="Team Member" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-white text-xl font-semibold">Emily Davis</h3>
                <p class="text-white text-sm">Agent</p>
            </div>
            <div class="bg-[#262318] p-6 rounded-lg text-center hover-scale cursor-default">
                <img src="https://secure.gravatar.com/avatar/fedf00660c526608cd5c90df793148fb?s=450&d=mm&r=g"
                    alt="Team Member" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-white text-xl font-semibold">Michael Chen</h3>
                <p class="text-white text-sm">Agent</p>
            </div>
        </div>
    </section>
</main>
@endsection
