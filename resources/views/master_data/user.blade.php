<x-app-layout>

    <div class="rounded-lg">

        <div class="bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">
            <div class="flex items-center">
                <button data-modal-target="newCreationModal" data-modal-toggle="newCreationModal" type="button"
                    class="flex items-center text-white bg-batman-900 hover:bg-batman-800 focus:ring-4 focus:ring-batman-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 focus:outline-none">
                    <img src="{{ asset('svg/plus.svg') }}" class="w-3 h-3 me-2" alt="Plus Icon">
                    Tambah
                </button>
                <span class="text-lg ml-2 font-semibold text-batman-900">Master Data</span>
            </div>

            <hr class="my-4">


            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500" id="tableData">
                    <thead class="text-xs text-white uppercase bg-batman-900">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Username
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

    </div>

    <!-- Main modal -->
    <div id="newCreationModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full" data-modal-hide="newCreationModal"></div>


        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tambah User Baru
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="newCreationModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex flex-col">
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="username" class="block text-sm font-medium text-batman-900">Username</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="username" name="username"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan username" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="nama" class="block text-sm font-medium text-batman-900">Nama</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="nama" name="nama"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nama" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="password" class="block text-sm font-medium text-batman-900">Password</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="password" id="password" name="password"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan password" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="profile" class="block text-sm font-medium text-batman-900">Profile</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <select name="select_profile" id="select_profile" style="width: 100%; height: 38px !important;">
                                    <option value="">Select profile</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="status" class="block text-sm font-medium text-batman-900">Status</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button data-modal-hide="newCreationModal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">I
                        accept</button>
                    <button data-modal-hide="newCreationModal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Decline</button>
                </div>
            </div>
        </div>
    </div>

    <script>

        // ========================= GLOBAL SETUP CSRF =========================
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){

            dataTable();
            $("#select_profile").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

        });

        // ========================= DATATABLE =========================
        function dataTable() {
            if ($.fn.DataTable.isDataTable('#tableData')) {
                $('#tableData').DataTable().clear().destroy(); // optional jika mau re-init total
            }

            $('#tableData tfoot th').each(function (i) {
                var header_name = $('#tableData thead th').eq($(this).index()).text();
                var title = header_name.toLowerCase().replace(/\s+/g, "_");
                if ( i != 0 && i != 4 && i != 5 ) {
                    $(this).html(
                        '<input type="text" class="input_filter_tableData" id="' + title + '_filter" placeholder="' + header_name + '" data-index="' + i + '" style="width: 100%"/>'
                    );
                }

            });

            var tableData = $("#tableData").DataTable({
                serverSide: true,
                processing: true,
                paginate: true,
                autoWidth: true,
                searchable: false,
                orderCellsTop: true,
                dom: 'lBrtip',
                bRetrieve: true,
                scrollY: "535px",
                scrollCollapse: true,
                orderCellsTop: true,
                ajax: {
                    type: 'GET',
                    url: `{{ route("get-user-list-datatable") }}`,
                    data: {
                    },
                },
                columns: [
                    {
                        data:'DT_RowIndex',
                        name:'DT_RowIndex',
                        orderable:false,
                        searchable:false
                    },
                    {
                        data: 'username',
                        name: 'username',
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        className: 'text-center',
                    },
                ],
                order: [[0, 'asc']],
                columnDefs: [
                    { className: "dt-center", targets: [0,1,4] }
                ],
                language: {
                    loadingRecords: '&nbsp;',
                    processing: '<div class="spinner" style="z-index: 1;"></div>',
                    zeroRecords: "No data found",
                },
            });

            // Filter event handler
            $(tableData.table().container()).on('keyup', 'tfoot input', function () {
                console.log(tableData.table().container());

                tableData.column($(this).data('index')).search(this.value).draw();
            });

        }

    </script>

</x-app-layout>
