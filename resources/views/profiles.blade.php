@extends('/layouts/layout')

@section('page-title')
Profiles
@endsection

@section('head-title')
<h1 class="text-white text-[60px] font-bold">AGENTS PROFILE</h1>
<p class="text-white text-[24px] mt-4">Our Expert Agent</p>
@endsection

@section('body')
<main class="container mx-auto px-4 py-16 max-w-[70%]">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-2/3 flex flex-col gap-4">
                <div class="profile-card bg-black rounded-2xl shadow-md p-6 flex flex-row gap-3">
                    <img src="https://secure.gravatar.com/avatar/fbc680fbc163811bea4e61ff43cccd59?s=450&d=mm&r=g" alt="Debra Moran" class="w-[200px] h-[200px] rounded-sm mx-auto mb-4">
                    <div>
                        <h3 class="text-xl font-bold mb-2">John Smith</h3>
                        <p class="text-gray-400 mb-4">Agent</p>
                        <div class="flex flex-col gap-2">
                            <a href="tel:(917) 367-2058" class="text-blue-500 hover:text-blue-400">
                                <i class="fas fa-phone mr-2"></i> (917) 367-2058
                            </a>
                            <a href="mailto:agent@wpdirectorykit.com" class="text-blue-500 hover:text-blue-400">
                                <i class="fas fa-envelope mr-2"></i> agent@wpdirectorykit.com
                            </a>
                            <a href="#" class="text-blue-500 hover:text-blue-400">
                                <i class="fas fa-map-marker-alt mr-2"></i> Location
                            </a>
                        </div>
                    </div>
                </div>

                <div class="profile-card bg-black rounded-2xl shadow-md p-6 flex flex-row gap-3">
                    <img src="https://secure.gravatar.com/avatar/7f119498e0ed4df002f6676e1b8b1b07?s=450&d=mm&r=g" alt="Garry Novan" class="w-[200px] h-[200px] rounded-sm mx-auto mb-4">
                    <div>
                        <h3 class="text-xl font-bold mb-2">Emily Davis</h3>
                        <p class="text-gray-400 mb-4">Agent</p>
                        <div class="flex flex-col gap-2">
                            <a href="tel:(888) 346-2015" class="text-blue-500 hover:text-blue-400">
                                <i class="fas fa-phone mr-2"></i> (888) 346-2015
                            </a>
                            <a href="mailto:agent@wpdirectorykit.com" class="text-blue-500 hover:text-blue-400">
                                <i class="fas fa-envelope mr-2"></i> agent@wpdirectorykit.com
                            </a>
                            <a href="#" class="text-blue-500 hover:text-blue-400">
                                <i class="fas fa-map-marker-alt mr-2"></i> Location
                            </a>
                        </div>
                    </div>
                </div>

                <div class="profile-card bg-black rounded-2xl shadow-md p-6 flex flex-row gap-3">
                    <img src="https://secure.gravatar.com/avatar/fedf00660c526608cd5c90df793148fb?s=450&d=mm&r=g" alt="Kety Spear" class="w-[200px] h-[200px] rounded-sm mx-auto mb-4">
                    <div>
                        <h3 class="text-xl font-bold mb-2">Michael Chen</h3>
                        <p class="text-gray-400 mb-4">Agent</p>
                        <div class="flex flex-col gap-2">
                            <a href="tel:(999) 854-2056" class="text-blue-500 hover:text-blue-400">
                                <i class="fas fa-phone mr-2"></i> (999) 854-2056
                            </a>
                            <a href="mailto:agent@wpdirectorykit.com" class="text-blue-500 hover:text-blue-400">
                                <i class="fas fa-envelope mr-2"></i> agent@wpdirectorykit.com
                            </a>
                            <a href="#" class="text-blue-500 hover:text-blue-400">
                                <i class="fas fa-map-marker-alt mr-2"></i> Location
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <div class="profile-card bg-black rounded-2xl shadow-md p-6">
                    <div class="mt-4">
                        <input type="text" placeholder="Enter Profile Name" class="bg-gray-700 text-white px-4 py-2 rounded-md w-full" />
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md mt-2 w-full">Search Profile</button>
                    </div>

                    <div class="mt-5">
                        <h2 class="text-white text-lg font-bold mb-4">Categories</h2>
                        <ul class="text-white">
                          <li class="flex justify-between items-center py-2 border-b border-gray-700">
                            <div class="flex items-center">
                              <input type="checkbox" class="mr-2">
                              <span>House</span>
                            </div>
                            <span class="text-gray-400">(3)</span>
                          </li>
                          <li class="flex justify-between items-center py-2 border-b border-gray-700">
                            <div class="flex items-center">
                              <input type="checkbox" class="mr-2">
                              <span>Apartment</span>
                            </div>
                            <span class="text-gray-400">(2)</span>
                          </li>
                          <li class="flex justify-between items-center py-2 border-b border-gray-700">
                            <div class="flex items-center">
                              <input type="checkbox" class="mr-2">
                              <span>Agriculture</span>
                            </div>
                            <span class="text-gray-400">(2)</span>
                          </li>
                          <li class="flex justify-between items-center py-2 border-b border-gray-700">
                            <div class="flex items-center">
                              <input type="checkbox" class="mr-2">
                              <span>Commercial</span>
                            </div>
                            <span class="text-gray-400">(2)</span>
                          </li>
                          <li class="flex justify-between items-center py-2 border-b border-gray-700">
                            <div class="flex items-center">
                              <input type="checkbox" class="mr-2">
                              <span>Industrial</span>
                            </div>
                            <span class="text-gray-400">(2)</span>
                          </li>
                          <li class="flex justify-between items-center py-2 border-b border-gray-700">
                            <div class="flex items-center">
                              <input type="checkbox" class="mr-2">
                              <span>Garage</span>
                            </div>
                            <span class="text-gray-400">(2)</span>
                          </li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
</main>
@endsection
