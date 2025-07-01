<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-[35px] transition-transform -translate-x-full bg-batman-900 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 bg-batman-900 flex flex-col justify-between">
        <div class="flex flex-col overflow-y-auto mx-0">
            <a href="https://flowbite.com/" class="flex mb-5 mx-auto">
                <img src="{{ asset('svg/logo-yomart-ops-landscape.svg') }}" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
            </a>
            <div class="overflow-y-auto flex flex-col mt-[18px]">

                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center p-3 rounded-lg text-white bg-batman-700 hover:bg-batman-950 {{ Request::routeIs('dashboard') ? 'bg-batman-950' : '' }}">
                            <img src="{{ asset('svg/home.svg') }}" class="w-5 h-5" />
                            <span class="ms-3 text-sm">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <button type="button"
                            class="flex items-center w-full p-3 text-base text-white bg-batman-700 transition duration-75 rounded-lg group hover:bg-batman-950 "
                            aria-controls="dropdown-master-data" data-collapse-toggle="dropdown-master-data">

                            <img src="{{ asset('svg/folder-open.svg') }}" class="w-5 h-5" aria-hidden="true" />
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Master Data</span>

                            {{-- ARROW --}}
                            <svg class="w-3 h-3 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>

                        </button>
                        <ul id="dropdown-master-data" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <a href="/master_data/user"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950 {{ Request::routeIs('/master_data/user') ? 'bg-batman-950' : '' }}">
                                    <img src="{{ asset('svg/master_user.svg') }}" class="w-5 h-5 mr-2" />
                                    User
                                </a>
                            </li>
                            <li>
                                <a href="/master_data/profile"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950 {{ Request::routeIs('/master_data/profile') ? 'bg-batman-950' : '' }}">Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">Bakery</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">Cook
                                    Food</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">Fashion</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">Fresh</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">Biaya</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">Vendor</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-3 text-base text-white transition duration-75 rounded-lg group bg-batman-700 hover:bg-batman-950 "
                            aria-controls="dropdown-kelola-lokasi" data-collapse-toggle="dropdown-kelola-lokasi">

                            <img src="{{ asset('svg/location.svg') }}" class="w-5 h-5" aria-hidden="true" />
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Kelola
                                Lokasi</span>

                            {{-- ARROW --}}
                            <svg class="w-3 h-3 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>

                        </button>
                        <ul id="dropdown-kelola-lokasi" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">User</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">Billing</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-3 text-base text-white transition duration-75 rounded-lg group bg-batman-700 hover:bg-batman-950 "
                            aria-controls="dropdown-kelola-toko" data-collapse-toggle="dropdown-kelola-toko">

                            <img src="{{ asset('svg/store.svg') }}" class="w-5 h-5" aria-hidden="true" />
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Kelola Toko</span>

                            {{-- ARROW --}}
                            <svg class="w-3 h-3 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>

                        </button>
                        <ul id="dropdown-kelola-toko" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">List</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group bg-batman-400 hover:bg-batman-950">Form</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <div id="dropdown-cta" class="p-4 rounded-lg bg-batman-300" role="alert">
                    <div class="flex items-center mb-3">
                    <span class="bg-orange-100 text-orange-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded-md ">1TCS</span>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-batman-50 inline-flex justify-center items-center w-6 h-6 text-batman-900 rounded-lg focus:ring-2 focus:ring-batman-400 p-1 hover:bg-batman-200 " data-dismiss-target="#dropdown-cta" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                    </div>
                    <p class="mb-3 text-sm text-batman-800 ">
                    Preview the new Flowbite dashboard navigation! You can turn the new navigation off for a limited time in your profile.
                    </p>
                    <a class="text-sm text-batman-800 underline font-medium hover:text-batman-900" href="#">Turn new navigation off</a>
                </div> --}}
                </ul>
            </div>
        </div>

        <footer class="">
            <div class="w-full max-w-screen-xl mx-auto p-2 md:py-4">
                <span class="block text-xs text-white sm:text-center ">© ITCS 2025. All rights reserved.</span>
            </div>
        </footer>
    </div>
</aside>
