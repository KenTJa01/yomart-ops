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
                        Selamat Datang di YomartOps – silakan <em>login</em> terlebih dahulu sebelum masuk ke
                        website.
                    </p>
                </div>

                <div id="div-alert" class="mb-4">

                    <div id="alert-login-failed" class="hidden flex items-center w-full p-4 mb-4 text-batman-900 bg-red-50 rounded-lg shadow-sm" role="alert">
                        <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-ironman-500 bg-ironman-100 rounded-lg">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                            </svg>
                            <span class="sr-only">Error icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal"><span class="font-bold">LOGIN FAILED!</span> Username or password are wrong!</div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-ironman-500 text-white hover:text-white rounded-lg focus:ring-2 focus:ring-ironman-300 p-1.5 hover:bg-ironman-600 inline-flex items-center justify-center h-8 w-8" onclick="$('#alert-login-failed').addClass('hidden')" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>

                    <div id="alert-not-active" class="hidden flex items-center w-full p-4 mb-4 text-batman-900 bg-red-50 rounded-lg shadow-sm" role="alert">
                        <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-ironman-500 bg-ironman-100 rounded-lg">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                            </svg>
                            <span class="sr-only">Error icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal"><span class="font-bold">NOT ACTIVE!</span> User not active!</div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-ironman-500 text-white hover:text-white rounded-lg focus:ring-2 focus:ring-ironman-300 p-1.5 hover:bg-ironman-600 inline-flex items-center justify-center h-8 w-8" onclick="$('#alert-not-active').addClass('hidden')" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>

                    <div id="alert-success" class="hidden flex items-center w-full p-4 mb-4 text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm" role="alert">
                        <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <span class="sr-only">Check icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal"><span class="font-bold">SUCCESS!</span> You've successfully logged in.</div>
                        {{-- <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-success" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button> --}}
                    </div>

                </div>

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

        function delay(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
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
                success: async function(response) {

                    if (response.errors) {

                        var alert = document.getElementById("alert_error");
                        console.log(response.errors.title);

                        if (response.errors.title == "LOGIN FAILED!") {

                            $("#alert-login-failed").removeClass("hidden");
                            $("#alert-not-active").addClass("hidden");
                            $("#alert-success").addClass("hidden");

                        } else if (response.errors.title == "NOT ACTIVE!") {

                            $("#alert-not-active").removeClass("hidden");
                            $("#alert-login-failed").addClass("hidden");
                            $("#alert-success").addClass("hidden");

                        } else {

                            $("#alert-login-failed").removeClass("hidden");
                            $("#alert-not-active").addClass("hidden");
                            $("#alert-success").addClass("hidden");

                        }

                    } else {

                        $("#alert-login-failed").addClass("hidden");
                        $("#alert-not-active").addClass("hidden");
                        $("#alert-success").removeClass("hidden");

                        // ✅ Delay selama 10 detik
                        await delay(700);

                        // ✅ Redirect setelah delay
                        window.location.href = response.redirect;

                    }

                }

            });
        });

    });
</script>
