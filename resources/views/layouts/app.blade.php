<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- DATATABLES --}}
    <script src="{{ asset('js/jquery-v3-7-1.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">

    {{-- SELECT 2 & AUTOCOMPLETE --}}
    <link href="{{ asset('css/select2-min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/select2-min.js') }}"></script>

    {{-- Ajax --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


</head>

<body class="font-sans antialiased" style="background-color: #f7f7f7;">

    {{-- FLASH MESSAGES --}}

    {{-- NAVBAR --}}
    {{-- @include('components.navbar') --}}

    {{-- SIDEBAR --}}
    @include('components.sidebar')

    {{-- MAIN CONTENT --}}
    <div class="p-4 sm:ml-64">
        <nav class="sticky z-30 w-[100%] bg-white border border-batman-50 rounded-lg shadow-sm">
            <div class="px-3 py-4 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start rtl:justify-end">
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar" type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>
                        <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                            <img src="{{ asset('svg/logo-yomart-ops-landscape-dark.svg') }}" style="width: 150px;"
                                class="h-auto" alt="Yomart Ops Logo" />
                        </a>
                    </div>

                    <div class="flex items-center">
                        <div class="flex items-center ms-3">
                            <div>
                                <button type="button"
                                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 "
                                    aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                        alt="user photo">
                                </button>
                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-sm shadow-lg border border-batman-50"
                                id="dropdown-user">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 " role="none">
                                        Neil Sims
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 truncate " role="none">
                                        neil.sims@flowbite.com
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  "
                                            role="menuitem">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  "
                                            role="menuitem">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  "
                                            role="menuitem">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  "
                                            role="menuitem">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>

    <div class="pl-4 pr-4 pb-4 sm:ml-64">
        {{ $slot }}
    </div>

</body>

</html>
