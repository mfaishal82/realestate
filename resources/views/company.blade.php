@extends('/layouts/layout')

@section('page-title')
Company Profile
@endsection

@section('head-title')
<h1 class="text-white text-[72px] font-bold mb-4 tracking-tight">Gold Estate History</h1>
<p class="text-white/80 text-[28px]">Our Journey Since 2012</p>
@endsection

@section('body')
<main class="container mx-auto px-4 py-16 max-w-[82%]">
    <section class="mb-20">
    <h2 class="text-white text-center text-[45px] mb-16 font-bold">Our Journey Milestones</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="milestone-card p-8">
            <div class="flex items-center mb-6">
                <i class="fas fa-calendar-alt text-[#ffd700] text-4xl mr-6"></i>
                <h3 class="text-white text-3xl font-semibold">2012</h3>
            </div>
            <p class="text-white/80">
                The beginning of Gold Estate's journey in Jakarta, starting with a small team with a big vision in the property industry, focusing on residential properties in Central Jakarta.
            </p>
        </div>

        <div class="milestone-card p-8">
            <div class="flex items-center mb-6">
                <i class="fas fa-trophy text-[#ffd700] text-4xl mr-6"></i>
                <h3 class="text-white text-3xl font-semibold">2015</h3>
            </div>
            <p class="text-white/80">
                Successfully developed the first project in Menteng, a luxury housing complex with 50 units that received appreciation from the Indonesian Property Developers Association.
            </p>
        </div>

        <div class="milestone-card p-8">
            <div class="flex items-center mb-6">
                <i class="fas fa-globe text-[#ffd700] text-4xl mr-6"></i>
                <h3 class="text-white text-3xl font-semibold">2018</h3>
            </div>
            <p class="text-white/80">
                National expansion with the opening of branches in Surabaya and Bali, extending service reach to eastern Indonesia with total property assets of IDR 500 billion.
            </p>
        </div>

        <div class="milestone-card p-8">
            <div class="flex items-center mb-6">
                <i class="fas fa-award text-[#ffd700] text-4xl mr-6"></i>
                <h3 class="text-white text-3xl font-semibold">2020</h3>
            </div>
            <p class="text-white/80">
                Won the "Best Property Developer" award from Indonesian Property Magazine after successfully developing more than 200 properties across Indonesia.
            </p>
        </div>

        <div class="milestone-card p-8">
            <div class="flex items-center mb-6">
                <i class="fas fa-chart-line text-[#ffd700] text-4xl mr-6"></i>
                <h3 class="text-white text-3xl font-semibold">2022</h3>
            </div>
            <p class="text-white/80">
                Launched a digital platform for property transactions and investment management, with annual transactions exceeding IDR 1 trillion and more than 500 loyal clients.
            </p>
        </div>
    </div>
    </section>

    <section class="mb-20">
        <h2 class="text-white text-center text-[45px] mb-16 font-bold">Key Achievements</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="achievement-card p-8 text-center">
                <i class="fas fa-building text-5xl text-[#ffd700] mb-6"></i>
                <h3 class="text-white text-3xl font-bold mb-4">250+</h3>
                <p class="text-white/70">Total Properties Developed</p>
            </div>
            <div class="achievement-card p-8 text-center">
                <i class="fas fa-users text-5xl text-[#ffd700] mb-6"></i>
                <h3 class="text-white text-3xl font-bold mb-4">1000+</h3>
                <p class="text-white/70">Clients Served Across Indonesia</p>
            </div>
            <div class="achievement-card p-8 text-center">
                <i class="fas fa-globe text-5xl text-[#ffd700] mb-6"></i>
                <h3 class="text-white text-3xl font-bold mb-4">4</h3>
                <p class="text-white/70">Official Branches in Indonesia</p>
            </div>
        </div>
    </section>
</main>
@endsection

