<x-guest-layout>
    <div class="flex min-h-screen">

        <!-- Left Image Side -->
        <div class="hidden lg:flex lg:w-1/2 lg:h-screen relative">

            <img src="{{ asset('svg/img/login-img-left.svg') }}" alt="Supermarket" class="w-full h-full object-cover" />

            <!-- Logo Blur Box -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-white/20 backdrop-blur-lg px-10 py-7 rounded-full shadow-lg flex items-center space-x-4">
                    <img src="{{ asset('svg/logo-yomart-ops-landscape.svg') }}" class="h-auto" alt="logo"
                        style="width: 300px" />
                </div>
            </div>

        </div>

        <!-- Right Form Side -->
        <div class="flex w-full lg:w-1/2 items-center justify-center p-6 bg-white rounded-lg">

            <div id="right_content" class="w-full max-w-md">

                <div class="flex flex-col lg:items-left mb-8">
                    <img src="{{ asset('svg/img/logo-yomart.svg') }}" class="w-14 h-14 mb-3" alt="logo" />
                    <h2 class="text-2xl font-bold text-gray-800">Ayo Mulai!</h2>
                    <p class="text-sm text-gray-600 lg:text-left mt-2">
                        Selamat Data Mastering di YomartOps – silakan <em>login</em> terlebih dahulu sebelum masuk ke
                        website.
                    </p>
                </div>

                <div id="div-alert" class="mb-4"></div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Username</label>
                        <input id="username" type="text"
                            class="py-2.5 sm:py-3 ps-4 pe-10 mt-1 block w-full rounded-md border border-gray-300 sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Enter username" />
                    </div>
                    <div>
                        <label class="block text-sm">Password</label>
                        <div class="relative mt-1">
                            <input type="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 sm:py-3 ps-4 pe-10 mt-1 "
                                placeholder="Enter password" required />
                        </div>
                    </div>
                    <button id="button_login" type="submit"
                        class="w-full bg-gray-800 hover:bg-gray-900 text-white font-semibold py-2 rounded-md">
                        Login
                    </button>
                </div>

                <p class="text-xs text-center text-gray-400 mt-6">© ITCS 2024. All rights reserved.</p>
            </div>
        </div>
    </div>
</x-guest-layout>

<script>

    // ========================= GLOBAL SETUP CSRF =========================
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {

        var username = document.getElementById("username");
        var pass = document.getElementById("password");
        $(username).focus();

        if (username != null && pass != null) {

            pass.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.getElementById("button_login").click();
                }
            });

        }

        $("#button_login").click(function() {

            var username = $("#username").val();
            var password = $("#password").val();

            $.ajax({
                type: 'POST',
                url: "{{ url('/post-request-login') }}",
                dataType: 'json',
                data: {
                    username: username,
                    password: password,
                },
                success: function(response) {

                    if (response.errors) {

                        var alert = document.getElementById("alert_error");

                        if (alert) {
                            alert.remove();
                            $("#div-alert").prepend(`
                                <div id="alert_error" class="mt-2 bg-red-50 border-s-4 border-red-500 p-4" role="alert" tabindex="-1" aria-labelledby="hs-bordered-red-style-label">
                                    <div class="flex">
                                        <div class="shrink-0">
                                            <!-- Icon -->
                                            <span
                                                class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg>
                                            </span>
                                            <!-- End Icon -->
                                        </div>
                                        <div class="ms-3">
                                            <h3 id="hs-bordered-red-style-label" class="text-gray-800 font-semibold">
                                                ` + response.errors.title + `
                                            </h3>
                                            <p id="message_error" class="text-sm text-gray-700">
                                                ` + response.errors.message + `
                                            </p>
                                        </div>
                                    </div>
                                </div>`);
                        } else {
                            $("#div-alert").prepend(`
                                <div id="alert_error" class="mt-2 bg-red-50 border-s-4 border-red-500 p-4" role="alert" tabindex="-1" aria-labelledby="hs-bordered-red-style-label">
                                    <div class="flex">
                                        <div class="shrink-0">
                                            <!-- Icon -->
                                            <span
                                                class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg>
                                            </span>
                                            <!-- End Icon -->
                                        </div>
                                        <div class="ms-3">
                                            <h3 id="hs-bordered-red-style-label" class="text-gray-800 font-semibold">
                                                ` + response.errors.title + `
                                            </h3>
                                            <p id="message_error" class="text-sm text-gray-700">
                                                ` + response.errors.message + `
                                            </p>
                                        </div>
                                    </div>
                                </div>`);
                        }

                    } else {

                        window.location.href = response.redirect;

                    }

                }

            });
        });

    });
</script>
