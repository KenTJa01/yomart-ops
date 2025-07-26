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

    {{-- Sweet Alert --}}
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script src="{{ asset('js/sweetalert-min.js') }}" crossorigin="anonymous"></script>

    {{-- DATATABLES --}}
    <script src="{{ asset('js/jquery-v3-7-1.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
    <script src="{{ asset('js/dataTables.fixedColumns.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/fixedColumns.dataTables.min.css') }}">

    {{-- SELECT 2 & AUTOCOMPLETE --}}
    <link href="{{ asset('css/select2-min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/select2-min.js') }}"></script>

    {{-- Ajax --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="{{ asset('../assets/vendor/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('../assets/vendor/sortablejs/Sortable.min.js') }}"></script>

       <style>

        /* ========================= SHOW [SELECT] ENTRIES ========================= */
        .dataTables_length label {
            font-size: 14px;
            font-weight: 500;
        }

        /* Ubah style <select> */
        .dataTables_length select {
            padding: 5px 12px !important;
            border-radius: 8px !important;
            border: 1px solid #dadada !important;
            background-color: #f9f9f9;
            width: 70px;
            margin: 0px 5px 10px 5px !important;
            font-size: 13px;
        }

        /* ========================= SHOW 1 TO 2 OF 2 ENTRIES ========================= */
        .dataTables_info {
            font-size: 14px;
            color: #4B5563;
            /* abu-abu Tailwind: gray-700 */
            font-weight: 500;
            margin-top: 10px;
        }

        /* Jika kamu ingin center, bisa pakai ini */
        .dataTables_info {
            text-align: center;
        }

        /* ========================= PAGING ========================= */
        .dataTables_paginate {
            margin-top: 10px !important;
        }

        /* Styling tombol paging */
        .dataTables_paginate .paginate_button {
            display: inline-block !important;
            padding: 6px 12px !important;
            margin: 0 2px !important;
            border-radius: 8px !important;
            color: #333 !important;
            cursor: pointer !important;
            font-size: 14px !important;
        }

        /* Hover effect */
        .dataTables_paginate .paginate_button:hover {
            background-color: #e5e7eb !important;
        }

        /* Aktif */
        .dataTables_paginate .paginate_button.current {
            background-color: #ffffff !important;
            color: white !important;
            padding: 6px 12px !important;
        }

        /* Disabled */
        .dataTables_paginate .paginate_button.disabled {
            opacity: 0.5 !important;
            cursor: not-allowed !important;
        }

        .tableData .top_left_tableData {
            border-top-left-radius: 8px;
        }

        .tableData .top_right_tableData {
            border-top-right-radius: 8px;
        }

        .tableData .bottom_left_tableData {
            border-bottom-left-radius: 8px;
        }

        .tableData .bottom_right_tableData {
            border-bottom-right-radius: 8px;
        }

        .tableData tbody td {
            padding: 13px 8px !important;
            font-size: 15px !important;
        }

        .tableData tbody tr {
            background-color: #ffffff !important;
        }

        .tableData tbody tr:hover {
            background-color: #f3f3f3 !important;
        }

        .button_edit {
            padding: 8px;
            border-radius: 6px;
            background-color: #ffb429;
            margin-right: 2px;
        }

        .button_edit:hover {
            background-color: #f09503;
        }

        .button_reset {
            padding: 8px;
            border-radius: 6px;
            background-color: #ff4d4d;
        }

        .button_reset:hover {
            background-color: #e60000;
        }

        .no-scrollbar {
            scrollbar-width: none;     /* Firefox */
            -ms-overflow-style: none;  /* IE & Edge */
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;             /* Chrome, Safari, Opera */
        }

        .select2-container .select2-selection {
            height: 41px !important;
            border: 1px solid #DEE2E6;
            border-radius: 0.375rem;
            padding: 6px 3px !important;
        }

        .custom-confirm-button-swal{
            width: 150px !important;
            border-radius: 10px !important;
        }

    </style>

</head>

<body class="font-sans antialiased" style="background-color: #efefef;">

    {{-- FLASH MESSAGES --}}

    {{-- NAVBAR --}}
    {{-- @include('components.navbar') --}}

    {{-- SIDEBAR --}}
    @include('components.sidebar')

    {{-- MAIN CONTENT --}}
    <div class="p-3 lg:ml-64">
        @include('components.navbar')

    </div>

    <div class="pl-3 pr-3 pb-3 lg:ml-64">
        {{ $slot }}
    </div>

</body>

</html>
