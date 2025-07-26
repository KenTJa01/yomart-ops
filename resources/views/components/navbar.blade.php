<nav class="sticky z-30 w-[100%] bg-white border border-batman-50 rounded-lg shadow-sm">
    <div class="px-3 py-4 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-5 h-5 md:w-6 md:h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                    <img src="{{ asset('svg/logo-yomart-ops-landscape-dark.svg') }}"
                        class="w-[130px] md:w-[150px] h-auto" alt="Yomart Ops Logo" />
                </a>
            </div>

            <div class="flex items-center">
                <div class="flex items-center ms-3">

                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                        class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 md:me-0 focus:ring-4 focus:ring-gray-100"
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full mr-0 sm:mr-2"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        <span class="hidden sm:inline">{{ Auth::user()->username }}</span>
                        <svg class="w-2.5 h-2.5 ms-2 hidden sm:inline" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-md border-batman-200 w-44">
                        <div class="px-4 py-3 text-sm text-gray-900">
                            <div class="font-medium ">Pro User</div>
                            <div class="truncate">name@flowbite.com</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 "
                            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <form id="logout-form" action="/logout" method="post">
                                @csrf
                                <button id="button_logout" type="button"
                                    class="block px-4 py-2 w-full text-left text-sm text-ironman-600 hover:bg-ironman-50">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    window.addEventListener('load', function() {
        if (typeof $ !== 'undefined') {

            $(document).ready(function() {

                // AJAX CSRF setup
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // ========================= CLICK BUTTON LOGOUT =========================
                $('#button_logout').on('click', function(e) {

                    e.preventDefault();

                    Swal.fire({
                        icon: "question",
                        title: "Logout",
                        text: "Are youm sure want to quit from this website?",
                        showCancelButton: true,
                        confirmButtonText: "Yes, Logout!",
                        confirmButtonColor: "#d33",
                        position: 'top-center',
                        customClass: {
                            popup: 'custom-popup-swal'
                        },
                        showClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                    }).then((result) => {

                        if (result.isConfirmed) {

                            $('#logout-form').submit();

                        }

                    });

                });
            });
        } else {
            console.error('jQuery is not loaded.');
        }
    });
</script>
