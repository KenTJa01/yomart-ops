<x-app-layout>

    <div class="rounded-lg">

        <div class="bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">
            <div class="flex items-center">
                <button id="button_new" data-modal-target="newCreationModal" data-modal-toggle="newCreationModal" type="button" class="flex items-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 focus:outline-none">
                    <img src="{{ asset('svg/plus.svg') }}" class="w-3 h-3 me-2" alt="Plus Icon">
                    Tambah
                </button>
                <span class="text-lg ml-2 font-semibold text-batman-900">Master Vendor</span>
            </div>

            <hr class="my-4">


            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="tableData w-full text-sm text-left rtl:text-right text-batman-900" id="tableData">
                    <thead class="text-sm text-white uppercase bg-batman-900">
                        <tr>
                            <th scope="col" class="top_left_tableData px-6 py-5 !pl-[25px] border-t-0 border-l-0">No.</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Nama Vendor</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">No. Telp</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">No. Rekening</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Pemilik Rekening</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Bank</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Nama Perusahan</th>
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
                            <th>Nama Vendor</th>
                            <th>No. Telp</th>
                            <th>No. Rekening</th>
                            <th>Pemilik Rekening</th>
                            <th>Bank</th>
                            <th>Nama Perusahan</th>
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
                        Tambah Data Fashion
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
                        <table>
                            <tr>
                                <td style="width: 23%">
                                    <label for="nama_vendor" class="block text-sm font-medium text-batman-900">Nama Vendor</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="nama_vendor" name="nama_vendor" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nama vendor" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="no_telp" class="block text-sm font-medium text-batman-900">No. Telp</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="no_telp" name="no_telp" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nomor telepon" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="no_rekening" class="block text-sm font-medium text-batman-900">No. Rekening</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="no_rekening" name="no_rekening" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nomor rekening" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="pemilik_rekening" class="block text-sm font-medium text-batman-900">Pemilik Rekening</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="pemilik_rekening" name="pemilik_rekening" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan pemilik rekening" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="bank" class="block text-sm font-medium text-batman-900">Bank</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="bank" name="bank" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan bank" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="nama_perusahaan" class="block text-sm font-medium text-batman-900">Nama Perusahaan</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="nama_perusahaan" name="nama_perusahaan" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nama perusahaan" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="status" class="block text-sm font-medium text-batman-900">Status</label>
                                </td>
                                <td style="width: 77%">
                                    <label class="inline-flex items-center cursor-pointer" style="margin-bottom: 5px !important">
                                        <input id="status" type="checkbox" value="" class="sr-only peer" checked>
                                        <div
                                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                        </div>
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_reset_modal" type="button" class="py-2.5 px-5 mr-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Reset</button>
                    <button id="button_submit_modal" type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <!-- Main modal -->
    <div id="editModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full" data-modal-hide="editModal"></div>


        <div class="relative p-4 w-full max-w-2xl max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Edit Data Fashion
                    </h3>
                    <button type="button" id="button_close_modal_edit"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="editModal">
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
                        <input type="hidden" id="vendor_id_edit">
                        <table>
                            <tr>
                                <td style="width: 23%">
                                    <label for="nama_vendor_edit" class="block text-sm font-medium text-batman-900">Nama Vendor</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="nama_vendor_edit" name="nama_vendor_edit" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nama vendor" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="no_telp_edit" class="block text-sm font-medium text-batman-900">No. Telp</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="no_telp_edit" name="no_telp_edit" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nomor telepon" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="no_rekening_edit" class="block text-sm font-medium text-batman-900">No. Rekening</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="no_rekening_edit" name="no_rekening_edit" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nomor rekening" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="pemilik_rekening_edit" class="block text-sm font-medium text-batman-900">Pemilik Rekening</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="pemilik_rekening_edit" name="pemilik_rekening_edit" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan pemilik rekening" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="bank_edit" class="block text-sm font-medium text-batman-900">Bank</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="bank_edit" name="bank_edit" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan bank" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="nama_perusahaan_edit" class="block text-sm font-medium text-batman-900">Nama Perusahaan</label>
                                </td>
                                <td style="width: 77%">
                                    <input type="text" id="nama_perusahaan_edit" name="nama_perusahaan_edit" style="margin-bottom: 5px !important"
                                    class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Masukkan nama perusahaan" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 23%">
                                    <label for="status_edit" class="block text-sm font-medium text-batman-900">Status</label>
                                </td>
                                <td style="width: 77%">
                                    <label class="inline-flex items-center cursor-pointer" style="margin-bottom: 5px !important">
                                        <input id="status_edit" type="checkbox" value="" class="sr-only peer" checked>
                                        <div
                                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                        </div>
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_submit_modal_edit" data-modal-hide="editModal" type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <button type="button" class="hidden button_edit" title="Edit Site" id="button_edit_modal" data-modal-target="editModal" data-modal-toggle="editModal" data-id="'.$row->id.'">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white" class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
        </svg>
    </button>

    <script>
        // ========================= GLOBAL SETUP CSRF =========================
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

            dataTable();

        });

        // ========================= DATATABLE =========================
        function dataTable() {
            if ($.fn.DataTable.isDataTable('#tableData')) {
                $('#tableData').DataTable().clear().destroy(); // optional jika mau re-init total
            }

            $('#tableData tfoot th').each(function(i) {
                var header_name = $('#tableData thead th').eq($(this).index()).text();
                var title = header_name.toLowerCase().replace(/\s+/g, "_");

                if (i != 0 && i != 8) {
                    $(this).html(
                        `<div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-2 ps-10 font-thin text-sm text-batman-300 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" id="` + title + `_filter" placeholder="` + header_name + `" data-index="` + i + `"/>
                        </div>`
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
                    url: `{{ route('get-vendor-list-datatable') }}`,
                    data: {},
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                    },
                    {
                        data: 'no_telp',
                        name: 'no_telp',
                    },
                    {
                        data: 'no_rekening',
                        name: 'no_rekening',
                    },
                    {
                        data: 'pemilik_rekening',
                        name: 'pemilik_rekening',
                    },
                    {
                        data: 'bank',
                        name: 'bank',
                    },
                    {
                        data: 'nama_perusahaan',
                        name: 'nama_perusahaan',
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
                columnDefs: [{
                    className: "dt-center border border-batman-100",
                    targets: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                }],
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

        $(document).on('click', '#button_reset_modal', function () {

            $('#nama_vendor').val('');
            $('#no_telp').val('');
            $('#no_rekening').val('');
            $('#pemilik_rekening').val('');
            $('#bank').val('');
            $('#nama_perusahaan').val('');
            $('#status').prop('checked', true);

        });

        $(document).on('click', '#button_new', function () {

            $('#nama_vendor').val('');
            $('#no_telp').val('');
            $('#no_rekening').val('');
            $('#pemilik_rekening').val('');
            $('#bank').val('');
            $('#nama_perusahaan').val('');
            $('#status').prop('checked', true);

        });

        // ========================= SUBMIT NEW DATA =========================
        $(document).on('click', '#button_submit_modal', function(event) {

            var nama_vendor = $("#nama_vendor").val();
            var no_telp = $("#no_telp").val();
            var no_rekening = $("#no_rekening").val();
            var pemilik_rekening = $("#pemilik_rekening").val();
            var bank = $("#bank").val();
            var nama_perusahaan = $("#nama_perusahaan").val();
            var status = document.getElementById('status').checked;

            if ( status == 1 ) {
                var flag = 1;
            } else {
                var flag = 0;
            }

            $.ajax({
                type: 'POST',
                url: "{{ url('/post-new-vendor') }}",
                dataType: 'json',
                data: {
                    nama_vendor: nama_vendor,
                    no_telp: no_telp,
                    no_rekening: no_rekening,
                    pemilik_rekening: pemilik_rekening,
                    bank: bank,
                    nama_perusahaan: nama_perusahaan,
                    status: flag,
                },
                success: function(response) {

                    return Swal.fire({
                        title: response.title,
                        text: response.message,
                        timer: 5000,
                        icon: "success",
                        timerProgressBar: true,
                        showConfirmButton: true,
                        confirmButtonColor: "#333333",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                        willClose: () => {
                            if (typeof response.route !== "undefined") {
                                window.location.href = response.route;
                            }
                        },
                    });
                },
                error: function(error) {

                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed submit vendor request',
                        target: document.getElementById('newCreationModal'),
                        showConfirmButton: true,
                        confirmButtonColor: "#c1141b",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                    });
                    $("#button_submit_modal").prop('disabled', false);
                },
            });


        });

        $(document).on('click', '.button_edit', function () {

            const modalEl = document.getElementById('editModal');

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

                const userId = $(this).data('id');
                console.log('Edit user ID:', userId);

            } else {

                console.error('Flowbite Modal tidak terdeteksi. Pastikan flowbite.min.js sudah dimuat.');

            }

        });

        $(document).on('click', '#button_close_modal_edit', function () {

            const modalEl = document.getElementById('editModal');

            if (typeof Modal !== 'undefined') {

                const modal = new Modal(modalEl);
                modal.hide();

            } else {

                console.error('Flowbite Modal tidak terdeteksi. Pastikan flowbite.min.js sudah dimuat.');

            }

        });

        $(document).on('click', '#button_edit_modal', function () {

            const data_id = $(this).data('id');

            $.ajax({
                type: 'GET',
                url: "{{ url('/get-old-data-of-vendor') }}",
                dataType: 'json',
                data: {
                    vendor_id: data_id,
                },
                success: function(response) {

                    $("#vendor_id_edit").val(response.id);
                    $("#nama_vendor_edit").val(response.nama);
                    $("#no_telp_edit").val(response.no_telp);
                    $("#no_rekening_edit").val(response.no_rekening);
                    $("#pemilik_rekening_edit").val(response.pemilik_rekening);
                    $("#bank_edit").val(response.bank);
                    $("#nama_perusahaan_edit").val(response.nama_perusahaan);

                    if ( response.flag == 1 ) {
                        $("#status_edit").attr('checked', true);
                    } else if ( response.flag == 0 ) {
                        $("#status_edit").attr('checked', false);
                    }

                },
                error: function(error) {
                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed get list of vendor',
                        showConfirmButton: true,
                        confirmButtonColor: "#c1141b",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                    });
                },
            });

        });

        // ========================= SUBMIT EDIT DATA =========================
        $(document).on('click', '#button_submit_modal_edit', function() {

            var id = $("#vendor_id_edit").val();
            var nama_vendor = $("#nama_vendor_edit").val();
            var no_telp = $("#no_telp_edit").val();
            var no_rekening = $("#no_rekening_edit").val();
            var pemilik_rekening = $("#pemilik_rekening_edit").val();
            var bank = $("#bank_edit").val();
            var nama_perusahaan = $("#nama_perusahaan_edit").val();
            var status = document.getElementById('status_edit').checked;

            if ( status == 1 ) {
                var flag = 1;
            } else {
                var flag = 0;
            }

            $.ajax({
                type: 'POST',
                url: "{{ url('/post-edit-vendor') }}",
                dataType: 'json',
                data: {
                    id_vendor: id,
                    nama_vendor: nama_vendor,
                    no_telp: no_telp,
                    no_rekening: no_rekening,
                    pemilik_rekening: pemilik_rekening,
                    bank: bank,
                    nama_perusahaan: nama_perusahaan,
                    status: flag,
                },
                success: function(response) {

                    return Swal.fire({
                        title: response.title,
                        text: response.message,
                        timer: 5000,
                        icon: "success",
                        timerProgressBar: true,
                        showConfirmButton: true,
                        confirmButtonColor: "#333333",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                        willClose: () => {
                            if (typeof response.route !== "undefined") {
                                window.location.href = response.route;
                            }
                        },
                    });
                },
                error: function(error) {

                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed submit vendor request',
                        target: document.getElementById('editModal'),
                        showConfirmButton: true,
                        confirmButtonColor: "#c1141b",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                    });
                    $("#button_submit_modal_edit").prop('disabled', false);
                },
            });

        });

    </script>

</x-app-layout>
