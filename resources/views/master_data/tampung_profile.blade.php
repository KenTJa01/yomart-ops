<x-app-layout>

    <div class="rounded-lg">

        <div class="bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="flex items-center">
                <button id="button_new" data-modal-target="newCreationModal" data-modal-toggle="newCreationModal" type="button"
                    class="flex items-center text-white bg-batman-900 hover:bg-batman-800 focus:ring-4 focus:ring-batman-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 focus:outline-none">
                    <img src="{{ asset('svg/plus.svg') }}" class="w-3 h-3 me-2" alt="Plus Icon">
                    Tambah
                </button>
                <span class="text-lg ml-2 font-semibold text-batman-900">Master Profile</span>
            </div>

            <hr class="my-4">


            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="tableData w-full text-sm text-left rtl:text-right text-batman-900" id="tableData">
                    <thead class="text-sm text-white uppercase bg-batman-900">
                        <tr>
                            <th scope="col" class="top_left_tableData px-6 py-5 !pl-[25px] border-t-0 border-l-0">No. </th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Profile Code</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Profile Name</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Status</th>
                            <th scope="col" class="top_right_tableData border-t-0 border-r-0" style="width: 90px !important;">
                                <img src="{{ asset('svg/action.svg') }}" class="w-5 h-5 m-auto">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="bottom_left_tableData"></th>
                            <th>Nama Profile</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th class="bottom_right_tableData"></th>
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
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full"></div>


        <div class="relative p-4 w-full max-w-2xl max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tambah Profile Baru
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="newCreationModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex flex-col">
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="select_tipe_profile" class="block text-sm font-medium text-batman-900">Tipe Profile</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <select name="select_tipe_profile" id="select_tipe_profile"
                                    style="width: 100%; height: 38px !important;">
                                    <option value="">Select tipe profile</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="profile_name" class="block text-sm font-medium text-batman-900">Nama Profile</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="profile_name" name="profile_name" class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama profile" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="description"
                                    class="block text-sm font-medium text-batman-900">Description</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="description" name="description" class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan deskripsi" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="daftar_menu" class="block text-sm font-medium text-batman-900">Daftar Menu</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <div class="w-full h-[150px] p-2 border border-batman-200 rounded-lg overflow-y-auto">

                                    <!-- Tree Root -->
                                    <div id="hs-tree-view-checkbox" role="tree" aria-orientation="vertical" data-hs-tree-view='{  "controlBy": "checkbox", "autoSelectChildren": true }'>

                                        <!-- 1st Level Accordion Group -->
                                        <div data-hs-nested-draggable="" id="menuTreeContent" data-hs-tree-view='{  "controlBy": "checkbox", "autoSelectChildren": true }'>

                                            <!-- 1st Level Accordion -->
                                            {{-- ISI KONTEN --}}
                                            <!-- End 1st Level Accordion -->

                                        </div>
                                        <!-- End 1st Level Accordion Group -->

                                    </div>
                                    <!-- End Tree Root -->

                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="status" class="block text-sm font-medium text-batman-900">Status</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input id="status" type="checkbox" value="" class="sr-only peer" checked>
                                    <div
                                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_reset_modal" type="button"
                        class="py-2.5 px-5 mr-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Reset</button>
                    <button id="button_submit_modal" data-modal-hide="newCreationModal" type="button"
                        class="text-white bg-batman-700 hover:bg-batman-800 focus:ring-4 focus:outline-none focus:ring-batman-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <!-- Main modal -->
    <div id="editModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full" data-modal-hide="editModal"></div>


        <div class="relative p-4 w-full max-w-2xl max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tambah User Baru
                    </h3>
                    <button type="button" id="button_close_modal_edit"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="editModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex flex-col">
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="username_edit"
                                    class="block text-sm font-medium text-batman-900">Username</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="username_edit" name="username"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan username" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="nama_edit" class="block text-sm font-medium text-batman-900">Nama</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="nama_edit" name="nama"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nama" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="password_edit"
                                    class="block text-sm font-medium text-batman-900">Password</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="password" id="password_edit" name="password"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan password" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="select_profile_edit"
                                    class="block text-sm font-medium text-batman-900">Profile</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <select name="select_profile_edit" id="select_profile_edit"
                                    style="width: 100%; height: 38px !important;">
                                    <option value="">Select profile</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="status_edit"
                                    class="block text-sm font-medium text-batman-900">Status</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input id="status_edit" type="checkbox" value="" class="sr-only peer"
                                        checked>
                                    <div
                                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_reset_modal_edit" type="button"
                        class="py-2.5 px-5 mr-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Reset</button>
                    <button id="button_submit_modal_edit" data-modal-hide="editModal" type="button"
                        class="text-white bg-batman-700 hover:bg-batman-800 focus:ring-4 focus:outline-none focus:ring-batman-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <button type="button" class="hidden button_edit" title="Edit Site" id="button_edit_modal"
        data-modal-target="editModal" data-modal-toggle="editModal" data-id="'.$row->id.'">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white"
            class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path
                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
        </svg>
    </button>

    <script>
        window.addEventListener('load', () => {
            (function() {
                const draggable = document.querySelectorAll('[data-hs-nested-draggable]');

                draggable.forEach((el) => {
                    const options = {
                        group: 'nested',
                        animation: 150,
                        fallbackOnBody: true,
                        swapThreshold: 0.65,
                        ghostClass: 'dragged',
                        onEnd: (evt) => {
                            const {
                                item
                            } = evt;

                            if (item.classList.contains('hs-accordion')) {
                                let existingInstance = HSAccordion.getInstance(item, true);
                                let updatedInstance;

                                existingInstance.element.update();
                                updatedInstance = HSAccordion.getInstance(item, true);
                                window.$hsAccordionCollection.map((el) => {
                                    if (
                                        el.element.el !== existingInstance.element.el &&
                                        el.element.group === existingInstance.element
                                        .group &&
                                        el.element.el.closest('.hs-accordion-group') &&
                                        el.element.el.classList.contains('active') &&
                                        existingInstance.element.el.classList.contains(
                                            'active')
                                    ) el.element.hide();

                                    return el;
                                });
                            }

                            if (!!item.hasAttribute('data-hs-tree-view-item')) {
                                const treeViewItem = HSTreeView.getInstance(item.closest(
                                    '[data-hs-tree-view]'), true);

                                treeViewItem.element.update();
                            }
                        },
                    };
                    const data = el.getAttribute('data-hs-nested-draggable');
                    const dataOptions = data ? JSON.parse(data) : {};
                    const sortable = new Sortable(el, _.merge(options, dataOptions));
                });
            })();
        });
    </script>

    <script>
        // ========================= GLOBAL SETUP CSRF =========================
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

            dataTable();

            $("#select_tipe_profile").select2({
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

            $('#tableData tfoot th').each(function(i) {
                var header_name = $('#tableData thead th').eq($(this).index()).text();
                var title = header_name.toLowerCase().replace(/\s+/g, "_");
                console.log(header_name);

                if (i != 0 && i != 4 && i != 5) {
                    $(this).html(
                        `<div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-2 ps-10 font-thin text-sm text-batman-300 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" id="` +
                        title + `_filter" placeholder="` + header_name + `" data-index="` + i + `"/>
                        </div>`
                        // <input type="text" class="bg-gray-50 border border-gray-300 text-batman-300 font-thin text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="' + title + '_filter" placeholder="' + header_name + '" data-index="' + i + '" style="width: 100%"/>'
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
                    url: `{{ route('get-profile-list-datatable') }}`,
                    data: {},
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'profile_code',
                        name: 'profile_code',
                    },
                    {
                        data: 'profile_name',
                        name: 'profile_name',
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
                order: [
                    [0, 'asc']
                ],
                columnDefs: [
                    {
                        className: "dt-center border border-batman-100",
                        targets: [0, 1, 2, 3, 4]
                    },
                ],
                language: {
                    loadingRecords: '&nbsp;',
                    processing: '<div class="spinner" style="z-index: 1;"></div>',
                    zeroRecords: "No data found",
                },
            });

            // Filter event handler
            $(tableData.table().container()).on('keyup', 'tfoot input', function() {
                tableData.column($(this).data('index')).search(this.value).draw();
            });

        }

        $(document).on('click', '#button_reset_modal', function() {

            $('#select_tipe_profile').val('').trigger('change');
            $('#profile_name').val('');
            $('#description').val('');

            $('#status').prop('checked', true);

        });

        $(document).on('click', '#button_new', function () {

            $('#select_tipe_profile').val('').trigger('change');
            $('#profile_name').val('');
            $('#description').val('');

            $('#status').prop('checked', true);

            getAllDataMenu();

        });

        function getAllDataMenu() {

            $.ajax({
                type: 'GET',
                url: "{{ url('/get-all-data-menu') }}",
                dataType: 'json',
                data: {},
                success: function(response) {

                    console.log(response);
                    renderMenuTree(response);

                },
                error: function(error) {
                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed get list of profile',
                    });
                },
            });

        }

        function renderMenuTree(data) {

            let html = '';

            data.forEach(menu => {

                html += `
                    <div class="hs-accordion hs-dragged:bg-blue-100 hs-dragged:rounded nested-2-1" role="treeitem" aria-expanded="true" id="hs-checkbox-tree-heading-${menu.menu_name.toLowerCase().replace(/\s+/g, '-')}" data-hs-tree-view-item='{ "value": "${menu.menu_name.toLowerCase().replace(/\s+/g, '_')}", "isDir": true }'>

                        <div class="hs-accordion-heading py-0.5 rounded-md flex items-center gap-x-0.5 w-full hs-tree-view-selected:bg-gray-100 ">
                            <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none " aria-expanded="true" aria-controls="${menu.menu_name.toLowerCase().replace(/\s+/g, '-')}-collapse">
                                <svg class="size-4 text-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                </svg>
                            </button>

                            <div class="grow hs-tree-view-selected:bg-gray-100  px-1.5 rounded-md cursor-pointer">
                                <span class="text-sm text-gray-800 ">
                                    <label class="flex">
                                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" value="${menu.menu_name.toLowerCase().replace(/\s+/g, '_')}">
                                        <span class="ms-3">${menu.menu_name}</span>
                                    </label>
                                </span>
                            </div>
                        </div>

                        <div id="${menu.menu_name.toLowerCase().replace(/\s+/g, '-')}-collapse" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="group" aria-labelledby="hs-checkbox-tree-heading-${menu.menu_name.toLowerCase().replace(/\s+/g, '-')}">

                            <!-- 2nd Level Accordion Group -->
                            <div class="ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-100 " data-hs-nested-draggable="">


                            `;

                menu.submenu.forEach(sub => {

                    html += `
                        <div class="hs-accordion hs-dragged:bg-blue-100 hs-dragged:rounded nested-2-2" role="treeitem" aria-expanded="true" id="${sub.submenu_name.toLowerCase().replace(/\s+/g, '-')}-heading-collapse" data-hs-tree-view-item='{ "value": "${sub.submenu_name.toLowerCase().replace(/\s+/g, '_')}", "isDir": true }'>

                            <!-- Master User Accordion Heading -->
                            <div class="hs-accordion-heading py-0.5 rounded-md flex items-center gap-x-0.5 w-full hs-tree-view-selected:bg-gray-100 ">
                                <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" aria-expanded="true" aria-controls="${sub.submenu_name.toLowerCase().replace(/\s+/g, '-')}-collapse">
                                    <svg class="size-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                    </svg>
                                </button>

                                <div class="grow hs-tree-view-selected:bg-gray-100  px-1.5 rounded-md cursor-pointer">
                                    <span class="text-sm text-gray-800 ">
                                        <label class="flex">
                                            <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" value="${sub.submenu_name.toLowerCase().replace(/\s+/g, '_')}">
                                            <span class="ms-3">${sub.submenu_name}</span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <!-- End Master User Accordion Heading -->

                            <!-- Master User Collapse -->
                            <div id="${sub.submenu_name.toLowerCase().replace(/\s+/g, '-')}-collapse" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="group" aria-labelledby="${sub.submenu_name.toLowerCase().replace(/\s+/g, '-')}-heading-collapse">

                                <!-- Master User Accordion Group -->
                                <div class="ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-100 "data-hs-nested-draggable=""> `;

                    sub.actions.forEach(action => {
                        html += `
                            <div class="py-0.5 px-1.5 rounded-md hs-tree-view-selected:bg-gray-100  hs-dragged:bg-blue-100 hs-dragged:rounded nested-2-3" role="treeitem" data-hs-tree-view-item='{ "value": "${action.key}", "isDir": false }'>
                                <span class="text-sm text-gray-800 ">
                                    <label class="flex">
                                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none " value="${action.key}">
                                        <span class="ms-3">${(action.key ?? '').replace(/_/g, ' ')}</span>
                                    </label>
                                </span>
                            </div>`;
                    });

                    html += `</div></div></div>`;

                });

                html += `</div></div></div>`;

            });

            $('#menuTreeContent').html(html);

            window.HSTreeView?.autoInit();

        }

        $(document).on('click', '.button_edit', function() {
            const modalEl = document.getElementById('editModal');

            // Pastikan class Modal dari flowbite tersedia
            if (typeof Modal !== 'undefined') {
                const modal = new Modal(modalEl);
                modal.show();

                $("#select_profile_edit").select2({
                    dropdownParent: $("#editModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                // Ambil ID dari data-id tombol
                const userId = $(this).data('id');
                console.log('Edit user ID:', userId);
            } else {
                console.error('Flowbite Modal tidak terdeteksi. Pastikan flowbite.min.js sudah dimuat.');
            }
        });

        $(document).on('click', '#button_close_modal_edit', function() {

            const modalEl = document.getElementById('editModal');

            if (typeof Modal !== 'undefined') {
                const modal = new Modal(modalEl);
                modal.hide();
            } else {
                console.error('Flowbite Modal tidak terdeteksi. Pastikan flowbite.min.js sudah dimuat.');
            }

        });

        $(document).on('click', '#button_reset_modal_edit', function() {
            $('#username_edit').val('');
            $('#nama_edit').val('');
            $('#password_edit').val('');
            $('#select_profile_edit').val('').trigger('change');
            $('#status_edit').prop('checked', true);
        });
    </script>

</x-app-layout>
