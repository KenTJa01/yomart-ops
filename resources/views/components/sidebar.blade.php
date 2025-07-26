<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-[35px] transition-transform -translate-x-full bg-batman-950 lg:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 bg-batman-950 flex flex-col justify-between">
        <div class="flex flex-col no-scrollbar overflow-y-auto mx-0">
            <a href="https://flowbite.com/" class="flex mb-5 mx-auto">
                <img src="{{ asset('svg/logo-yomart-ops-landscape.svg') }}" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
            </a>
            <div class="overflow-y-auto no-scrollbar flex flex-col mt-[18px]">

                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center p-3 rounded-lg text-white bg-batman-950 focus:bg-batman-800 hover:bg-batman-800 {{ Request::routeIs('dashboard') ? 'bg-batman-900' : '' }}">
                            <img src="{{ asset('svg/home.svg') }}" class="w-5 h-5" />
                            <span class="ms-3 text-sm">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <button type="button"
                            class="flex items-center w-full p-3 text-base text-white bg-batman-950 focus:bg-batman-800 transition duration-75 rounded-lg group hover:bg-batman-800 "
                            aria-controls="dropdown-master-data" data-collapse-toggle="dropdown-master-data">

                            <img src="{{ asset('svg/folder-open.svg') }}" class="w-5 h-5" aria-hidden="true" />
                            <span class="flex-1 ms-3 text-left rtl:text-rigxht whitespace-nowrap text-sm">Master Data</span>

                            {{-- ARROW --}}
                            <svg class="w-3 h-3 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>

                        </button>
                        <ul id="dropdown-master-data" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <a href="/master_data/user" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/master_data/user') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/master_user.svg') }}" class="w-[17px] h-[17px] mr-2" />
                                    User
                                </a>
                            </li>
                            <li>
                                <a href="/master_data/profile" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/master_data/profile') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/profile.svg') }}" class="w-[17px] h-[17px] mr-2" />
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="/master_data/bakery" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/master_data/bakery') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/bakery.svg') }}" class="w-[17px] h-[17px] mr-2" />
                                    Bakery
                                </a>
                            </li>
                            <li>
                                <a href="/master_data/cook_food" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/master_data/cook_food') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/cook_food.svg') }}" class="w-[17px] h-[17px] mr-2" />
                                    Cook Food
                                </a>
                            </li>
                            <li>
                                <a href="/master_data/fashion" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/master_data/fashion') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/fashion.svg') }}" class="w-[17px] h-[17px] mr-2" />
                                    Fashion
                                </a>
                            </li>
                            <li>
                                <a href="/master_data/fresh" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/master_data/fresh') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/fresh.svg') }}" class="w-[17px] h-[17px] mr-2" />
                                    Fresh
                                </a>
                            </li>
                            <li>
                                <a href="/master_data/jenis_biaya" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/master_data/jenis_biaya') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/biaya.svg') }}" class="w-[17px] h-[17px] mr-2" />
                                    Jenis Biaya
                                </a>
                            </li>
                            <li>
                                <a href="/master_data/produk" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/master_data/produk') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/produk.svg') }}" class="w-[17px] h-[17px] mr-2" />
                                    Produk
                                </a>
                            </li>
                            <li>
                                <a href="/master_data/vendor" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/master_data/vendor') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/vendor.svg') }}" class="w-[17px] h-[17px] mr-2" />
                                    Vendor
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="flex items-center w-full p-3 text-base text-white transition duration-75 rounded-lg group bg-batman-950 focus:bg-batman-800 hover:bg-batman-800" aria-controls="dropdown-kelola-lokasi" data-collapse-toggle="dropdown-kelola-lokasi">

                            <img src="{{ asset('svg/location.svg') }}" class="w-5 h-5" aria-hidden="true" />
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Kelola Lokasi</span>

                            {{-- ARROW --}}
                            <svg class="w-3 h-3 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>

                        </button>
                        <ul id="dropdown-kelola-lokasi" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <a href="/kelola_lokasi/pengajuan_objek" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/kelola_lokasi/pengajuan_objek') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/form.svg') }}" class="w-4.5 h-4.5 ml-1 mr-2" />
                                    Pengajuan Objek
                                </a>
                            </li>
                            <li>
                                <a href="/kelola_lokasi/data_objek" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/kelola_lokasi/data_objek') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/list.svg') }}" class="w-[22px] h-[22px] mr-2" />
                                    Data Objek
                                </a>
                            </li>
                            <li>
                                <a href="/kelola_lokasi/list_data_ban" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/kelola_lokasi/list_data_ban') ? 'bg-batman-900' : '' }}">
                                    <img src="{{ asset('svg/list.svg') }}" class="w-[22px] h-[22px] mr-2" />
                                    Data BAN
                                </a>
                            </li>
                            <li>
                                <a href="/kelola_lokasi/biaya" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800 {{ Request::routeIs('/kelola_lokasi/vendor') ? 'bg-batman-900' : '' }}">
                                    Biaya
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="flex items-center w-full p-3 text-base text-white transition duration-75 rounded-lg group bg-batman-950 focus:bg-batman-800 hover:bg-batman-800" aria-controls="dropdown-kelola-toko" data-collapse-toggle="dropdown-kelola-toko">

                            <img src="{{ asset('svg/store.svg') }}" class="w-5 h-5" aria-hidden="true" />
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Kelola Toko</span>

                            {{-- ARROW --}}
                            <svg class="w-3 h-3 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>

                        </button>
                        <ul id="dropdown-kelola-toko" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <a href="#" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800">
                                    <img src="{{ asset('svg/form.svg') }}" class="w-4.5 h-4.5 ml-1 mr-2" />
                                    Form
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-8 group hover:bg-batman-800">
                                    <img src="{{ asset('svg/list.svg') }}" class="w-[22px] h-[22px] mr-2" />
                                    List
                                </a>
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
                <span class="block text-xs text-white sm:text-center ">© 1TCS 2025. All rights reserved.</span>
            </div>
        </footer>
    </div>
</aside>
