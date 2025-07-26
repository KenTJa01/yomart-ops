<x-app-layout>

    <style>
         .select2-container .select2-selection {
            height: 46px !important;
            background-color: #ffffff !important;
            border: 1px solid rgb(229 231 235) !important;
            border-radius: 0.375rem;
            padding: 7.5px 3px !important;
            margin-bottom: 7px;
        }

        .vertical_line_two_row {
            border: none;
            border-left: 1px solid rgb(206, 206, 206);
            height: 105px;
            margin: 0 30px;
        }

    </style>

    <div class="rounded-lg">

        <div class="bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">
            <div class="flex items-center">
                <button id="button_new" type="button" class="flex items-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 focus:outline-none">
                    <img src="{{ asset('svg/plus.svg') }}" class="w-3 h-3 me-2" alt="Plus Icon">
                    Tambah
                </button>
                <span class="text-lg ml-2 font-semibold text-batman-900">Pengajuan Objek</span>
            </div>

            <hr class="my-4">


            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="tableData w-full text-sm text-left rtl:text-right text-batman-900" id="tableData">
                    <thead class="text-sm text-white uppercase bg-batman-900">
                        <tr>
                            <th scope="col" class="top_left_tableData px-6 py-5 !pl-[25px] border-t-0 border-l-0">No.
                            </th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Nama Vendor</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">No. Telp</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">No. Rekening</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Pemilik Rekening</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Bank</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Nama Perusahan</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Status</th>
                            <th scope="col" class="top_right_tableData border-t-0 border-r-0"
                                style="width: 90px !important;">
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

    <!-- APPROVE MODAL -->
    <div id="approveModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-hidden overflow-x-hidden fixed inset-0 z-50 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full" data-modal-hide="approveModal"></div>


        <div class="relative p-4 w-full !max-w-[1200px] max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Approve Pengajuan Objek
                    </h3>
                    <button type="button" id="button_close_modal_edit"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="approveModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4 overflow-y-auto h-full max-h-[60vh]">
                    <div class="flex flex-col">

                        <table style="width: 100%;">
                            <tr>
                                {{-- TANGGAL WAKTU --}}
                                <td class="label_form" style="width: 16%">Tanggal Waktu</td>
                                <td class="" style="margin: 0; padding: 0; width: 32%">
                                    <input type="date" id="tanggal_waktu_approve" class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                </td>

                                {{-- VERTICAL LINE --}}
                                <td style="width: 4%" rowspan="2">
                                    <hr class="vertical_line_two_row">
                                </td>

                                {{-- OBJEK SEWA/BELI --}}
                                <td class="label_form" style="width: 15%">Objek Sewa/Beli</td>
                                <td class="" style="margin: 0; padding: 0; width: 33%">
                                    <select class="select-alamat-spesifikasi" name="select_objek_sewa_beli_approve" id="select_objek_sewa_beli_approve" style="width: 100%; height: 46px !important;">
                                        <option value="">Pilih objek sewa/beli</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                {{-- JENIS OBJEK --}}
                                <td class="label_form" for="status">Jenis Objek</td>
                                <td class="container_input_form" style="margin: 0; padding: 0;">
                                    <select class="select-alamat-spesifikasi" name="select_jenis_objek_approve" id="select_jenis_objek_approve" style="width: 100%; height: 46px !important;">
                                        <option value="">Pilih jenis objek</option>
                                        <option value="sewa_baru">Sewa Baru</option>
                                        <option value="beli_baru">Beli Baru</option>
                                    </select>
                                </td>
                                <td></td>
                                <td class="" style="margin: 0; padding: 0;"></td>
                            </tr>
                        </table>


                        <div class="mb-4 border-b border-gray-200">

                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                                data-tabs-toggle="#default-tab-content" role="tablist">

                                {{-- GENERAL --}}
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="general-approve-tab"
                                        data-tabs-target="#general-approve" type="button" role="tab"
                                        aria-controls="general-approve" aria-selected="false">General</button>
                                </li>

                                {{-- ALAMAT & SPESIFIKASI --}}
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="alamat-approve-tab"
                                        data-tabs-target="#alamat-approve" type="button" role="tab"
                                        aria-controls="alamat-approve" aria-selected="false">Alamat & Spesifikasi</button>
                                </li>

                                {{-- DATA PEMILIK --}}
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="data-pemilik-approve-tab" data-tabs-target="#data-pemilik-approve" type="button" role="tab" aria-controls="data-pemilik-approve" aria-selected="false">
                                        Data Pemilik
                                    </button>
                                </li>

                                {{-- PERJANJIAN SEWA/SHBG/AJB --}}
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="perjanjian-sewa-approve-tab" data-tabs-target="#perjanjian-sewa-approve" type="button" role="tab" aria-controls="perjanjian-sewa-approve" aria-selected="false">
                                        Perjanjian Sewa/SHBG/AJB
                                    </button>
                                </li>

                                {{-- INFORMASI PBB --}}
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="informasi-pbb-approve-tab" data-tabs-target="#informasi-pbb-approve" type="button" role="tab" aria-controls="informasi-pbb-approve" aria-selected="false">
                                        Informasi PBB
                                    </button>
                                </li>

                                {{-- MASA BERLAKU SEWA --}}
                                {{-- <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="masa-berlaku-approve-tab" data-tabs-target="#masa-berlaku-approve" type="button" role="tab" aria-controls="masa-berlaku-approve" aria-selected="false">
                                        Masa Berlaku Sewa
                                    </button>
                                </li> --}}
                            </ul>

                        </div>

                        <div id="default-tab-content">

                            {{-- TAB GENERAL --}}
                            <div class="hidden p-4 rounded-lg bg-gray-50" id="general-approve" role="tabpanel" aria-labelledby="general-approve-tab">
                                <table style="width: 100%;">
                                    <tr>
                                        {{-- NAMA STORE --}}
                                        <td class="label_form" style="width: 15%">Nama Store</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="nama_store_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan nama store">
                                        </td>

                                        {{-- VERTICAL LINE --}}
                                        <td style="width: 4%" rowspan="4">
                                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 205px; margin: 0 30px;">
                                        </td>

                                        {{-- NAMA DI SERTIFIKAT --}}
                                        <td class="label_form" style="width: 15%">Nama di Sertifikat</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="nama_di_sertifikat_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan nama di sertifikat">
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- KODE STORE --}}
                                        <td class="label_form" style="width: 15%">Kode Store</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="kode_store_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan kode store">
                                        </td>

                                        {{-- FOTO OBJEK --}}
                                        <td class="label_form" style="width: 15%">Lampiran</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >

                                            <label for="upload_lampiran" class="inline-block cursor-pointer px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                                Pilih lampiran
                                            </label>
                                            <input id="upload_lampiran" type="file" accept="" multiple class="hidden">

                                            <!-- Keterangan jumlah / nama file -->
                                            <div id="file-info-lampiran" class="mt-2 text-sm text-gray-700 bg-white !border-batman-400"></div>

                                            <script>
                                            const inputLampiran = document.getElementById('upload_lampiran');
                                            const fileInfoLampiran = document.getElementById('file-info-lampiran');

                                            inputLampiran.addEventListener('change', function () {
                                                const total = this.files.length;

                                                if (total === 1) {
                                                fileInfoLampiran.textContent = this.files[0].name;
                                                } else if (total > 1) {
                                                fileInfoLampiran.textContent = `${total} lampiran telah dipilih`;
                                                } else {
                                                fileInfoLampiran.textContent = '';
                                                }
                                            });
                                            </script>

                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- INISIAL STORE --}}
                                        <td class="label_form" style="width: 15%">Inisial Store</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="inisial_store_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan inisial store">
                                        </td>
                                        {{-- KETERANGAN --}}
                                        <td class="label_form" style="width: 15%">Keterangan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                                            <textarea
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                id="keterangan_general_approve" style="resize: none;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- TANGGAL OPENING --}}
                                        <td class="label_form" style="width: 15%">Tanggal Opening</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%">
                                            <input type="date" id="tanggal_opening_approve" class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            {{-- TAB ALAMAT & SPESIFIKASI --}}
                            <div class="hidden p-4 rounded-lg bg-gray-50" id="alamat-approve" role="tabpanel" aria-labelledby="alamat-approve-tab">
                                <table style="width: 100%;">
                                    <tr>
                                        {{-- ALAMAT LENGKAP --}}
                                        <td class="label_form" style="width: 15%">Alamat Lengkap</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                                            <textarea
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                id="alamat_lengkap_approve" style="resize: none;"></textarea>
                                        </td>

                                        {{-- VERTICAL LINE --}}
                                        <td style="width: 4%" rowspan="10">
                                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 520px; margin: 0 30px; margin-top: -10px">
                                        </td>

                                        {{-- LUAS BANGUNAN --}}
                                        <td class="label_form" style="width: 15%">Luas Bangunan</td>
                                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                                            <div class="mb-[7px] flex items-center" style="margin: 0; padding: 0;">

                                                <input type="number" id="panjang_luas_bangunan_approve"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Panjang">

                                                <input type="number" id="lebar_luas_bangunan_approve"
                                                class="ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Lebar">

                                                <span class="ml-2 mr-2">m<sup>2</sup></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>

                                        {{-- LUAS TANAH --}}
                                        <td class="label_form" style="width: 15%">Luas Tanah</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%">
                                            <div class="mb-[7px] flex items-center">

                                                <input type="number" id="panjang_luas_tanah_approve"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Panjang">

                                                <input type="number" id="lebar_luas_tanah_approve"
                                                class="ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Lebar">

                                                <span class="ml-2 mr-2">m<sup>2</sup></span>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>

                                        {{-- RT & RW --}}
                                        <td>
                                            <div class="mb-[7px] flex">
                                                <input type="number" id="rt_approve"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="RT">
                                                <input type="number" id="rw_approve"
                                                class="ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="RW">
                                            </div>
                                        </td>

                                        {{-- HAK TANAH --}}
                                        <td class="label_form" style="width: 15%">Hak Tanah</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="select-alamat-spesifikasi" name="select_hak_tanah_approve" id="select_hak_tanah_approve" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih hak tanah</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- KOTA --}}
                                        <td class="label_form" style="width: 15%">Kota</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="select-alamat-spesifikasi" name="select_kota_approve" id="select_kota_approve" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih kota</option>
                                            </select>
                                        </td>

                                        {{-- PBG --}}
                                        <td class="label_form" style="width: 15%">PBG</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="select-alamat-spesifikasi" name="select_pbg_approve" id="select_pbg_approve" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih pbg</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- KECAMATAN --}}
                                        <td class="label_form" style="width: 15%">Kecamatan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="select-alamat-spesifikasi" name="select_kecamatan_approve" id="select_kecamatan_approve" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih kecamatan</option>
                                            </select>
                                        </td>

                                        {{-- KETERANGAN PBG --}}
                                        <td class="label_form" style="width: 15%">Keterangan PBG</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="keterangan_pbg_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan keterangan pbg">
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- KELURAHAN --}}
                                        <td class="label_form" style="width: 15%">Kelurahan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="select-alamat-spesifikasi" name="select_kelurahan_approve" id="select_kelurahan_approve" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih kelurahan</option>
                                            </select>
                                        </td>

                                        {{-- FOTO OBJEK --}}
                                        <td class="label_form" style="width: 15%">Foto Objek Sewa</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >

                                            <label for="upload_approve" class="inline-block cursor-pointer px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                                Pilih Foto
                                            </label>
                                            <input id="upload_approve" type="file" accept="image/*" multiple class="hidden">

                                            <!-- Keterangan jumlah / nama file -->
                                            <div id="file-info-upload" class="mt-2 text-sm text-gray-700 bg-white !border-batman-400"></div>

                                            <script>
                                            const input = document.getElementById('upload_approve');
                                            const fileInfo = document.getElementById('file-info-upload');

                                            input.addEventListener('change', function () {
                                                const total = this.files.length;

                                                if (total === 1) {
                                                fileInfo.textContent = this.files[0].name;
                                                } else if (total > 1) {
                                                fileInfo.textContent = `${total} foto telah dipilih`;
                                                } else {
                                                fileInfo.textContent = '';
                                                }
                                            });
                                            </script>

                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- WILAYAH --}}
                                        <td class="label_form" style="width: 15%">Wilayah</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="select-alamat-spesifikasi" name="select_wilayah_approve" id="select_wilayah_approve" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih wilayah</option>
                                            </select>
                                        </td>

                                        {{-- SLF --}}
                                        <td class="label_form" style="width: 15%">SLF</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="slf_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan slf">
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- REGIONAL --}}
                                        <td class="label_form" style="width: 15%">Regional</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="select-alamat-spesifikasi" name="select_regional_approve" id="select_regional_approve" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih regional</option>
                                            </select>
                                        </td>

                                        {{-- NIB --}}
                                        <td class="label_form" style="width: 15%">NIB</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="nib_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan nib">
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- CLUSTER --}}
                                        <td class="label_form" style="width: 15%">Cluster</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="select-alamat-spesifikasi" name="select_cluster_approve" id="select_cluster_approve" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih cluster</option>
                                            </select>
                                        </td>

                                        {{-- KETERANGAN --}}
                                        <td class="label_form" style="width: 15%">Keterangan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                                            <textarea
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                id="keterangan_alamat_approve" style="resize: none;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- LOKASI --}}
                                        <td class="label_form" style="width: 15%">Lokasi</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%">
                                            <select class="select-alamat-spesifikasi" name="select_lokasi_approve" id="select_lokasi_approve" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih lokasi</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            {{-- <div class="p-4 rounded-lg bg-gray-50" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                                <div class="max-w-xl mx-auto">
                                    <label class="block mb-2 text-sm font-medium text-gray-700" for="image_input">Upload Gambar</label>

                                    <!-- Dropzone Upload Box -->
                                    <div class="flex justify-center rounded-lg border border-dashed border-gray-300 bg-white px-6 py-10">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm text-gray-600">
                                        <label for="image_input" class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-600 hover:text-blue-500">
                                            <span>Pilih foto</span>
                                            <input id="image_input" type="file" accept="image/*" multiple class="sr-only">
                                        </label>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Bisa upload banyak gambar, max 5MB tiap file</p>
                                    </div>
                                    </div>

                                    <!-- Preview Container -->
                                    <div id="preview_container" class="mt-4 grid grid-cols-2 sm:grid-cols-3 gap-4"></div>
                                </div>

                                <script>
                                    const imageInput = document.getElementById('image_input');
                                    const previewContainer = document.getElementById('preview_container');

                                    imageInput.addEventListener('change', function () {
                                    previewContainer.innerHTML = ''; // Clear preview

                                    Array.from(this.files).forEach((file, index) => {
                                        const reader = new FileReader();

                                        reader.onload = function (e) {
                                        const previewBox = document.createElement('div');
                                        previewBox.className = 'relative border rounded-lg shadow p-2';

                                        previewBox.innerHTML = `
                                            <img src="${e.target.result}" class="w-full h-32 object-cover rounded" alt="Preview Gambar ${index + 1}" />
                                            <button type="button" class="absolute top-1 right-1 bg-red-500 text-white text-xs px-2 py-1 rounded hover:bg-red-600" onclick="this.parentElement.remove()">Hapus</button>
                                        `;

                                        previewContainer.appendChild(previewBox);
                                        };

                                        reader.readAsDataURL(file);
                                    });
                                    });
                                </script>
                            </div> --}}

                            {{-- TAB DATA PEMILIK --}}
                            <div class="hidden p-4 rounded-lg bg-gray-50" id="data-pemilik-approve" role="tabpanel" aria-labelledby="data-pemilik-approve-tab">
                                <table style="width: 100%;">
                                    <tr>
                                        {{-- NIK PEMILIK --}}
                                        <td class="label_form" style="width: 15%">NIK Pemilik</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="nik_pemilik_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan nik pemilik">
                                        </td>

                                        {{-- VERTICAL LINE --}}
                                        <td style="width: 4%" rowspan="2">
                                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 94px; margin: 0 30px; margin-top: -10px">
                                        </td>

                                        {{-- KONTAK PEMILIK --}}
                                        <td class="label_form" style="width: 15%">Kontak Pemilik</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="kontak_pemilik_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan kontak pemilik">
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- NAMA PEMILIK --}}
                                        <td class="label_form" style="width: 15%">Nama Pemilik</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="nama_pemilik_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan nama pemilik">
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            {{-- TAB PERJANJIAN SEWA/SHBG/AJB --}}
                            <div class="hidden p-4 rounded-lg bg-gray-50" id="perjanjian-sewa-approve" role="tabpanel" aria-labelledby="perjanjian-sewa-approve-tab">
                                <table style="width: 100%;">
                                    <tr>
                                        {{-- TANGGAL PERJANJIAN --}}
                                        <td class="label_form" style="width: 15%">Tanggal Perjanjian</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="date" id="tanggal_perjanjian_approve" class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                        </td>

                                        {{-- VERTICAL LINE --}}
                                        <td style="width: 4%" rowspan="2">
                                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 94px; margin: 0 30px; margin-top: -10px">
                                        </td>

                                        {{-- TANGGAL MULAI --}}
                                        <td class="label_form" style="width: 15%">Tanggal Mulai</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="date" id="tanggal_mulai_approve" class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- KETERANGAN --}}
                                        <td class="label_form" style="width: 15%">Keterangan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="keterangan_perjanjian_sewa_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan keterangan">
                                        </td>

                                        {{-- TANGGAL BERAKHIR --}}
                                        <td class="label_form" style="width: 15%">Tanggal Berakhir</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="date" id="tanggal_berakhir_approve" class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            {{-- TAB INFORMASI PBB --}}
                            <div class="hidden p-4 rounded-lg bg-gray-50" id="informasi-pbb-approve" role="tabpanel" aria-labelledby="informasi-pbb-approve-tab">
                                <table style="width: 100%;">
                                    <tr>
                                        {{-- NOP --}}
                                        <td class="label_form" style="width: 15%">NOP</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="nop_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan nop">
                                        </td>

                                        {{-- VERTICAL LINE --}}
                                        <td style="width: 4%" rowspan="2">
                                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 94px; margin: 0 30px; margin-top: -10px">
                                        </td>

                                        {{-- TANGGUNGAN --}}
                                        <td class="label_form" style="width: 15%">Tanggungan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="tanggungan_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan tanggungan">
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- ATAS NAMA --}}
                                        <td class="label_form" style="width: 15%">Atas Nama</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="atas_nama_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan atas nama">
                                        </td>

                                        {{-- MASA TANGGUNGAN --}}
                                        <td class="label_form" style="width: 15%">Masa Tanggungan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="masa_tanggungan_approve"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan masa tanggungan">
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_submit_modal_edit" data-modal-hide="approveModal" type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <button type="button" class="hidden button_edit" title="Edit Site" id="button_edit_modal"
        data-modal-target="approveModal" data-modal-toggle="approveModal" data-id="'.$row->id.'">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white"
            class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path
                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
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

            $("#select_jenis_objek").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_objek_sewa_beli").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_kota").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_hak_tanah").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_kecamatan").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_pbg").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_kelurahan").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_wilayah").select2({
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

                if (i != 0 && i != 8) {
                    $(this).html(
                        `<div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-2 ps-10 font-thin text-sm text-batman-300 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" id="` +
                        title + `_filter" placeholder="` + header_name + `" data-index="` + i + `"/>
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

        $(document).on('click', '#button_new', function() {

            window.location.href = '/kelola_lokasi/form_data_ban';

        });

        $(document).on('click', '.button_edit', function() {

            const modalEl = document.getElementById('approveModal');

            if (typeof Modal !== 'undefined') {

                const modal = new Modal(modalEl);
                modal.show();

                // ========================= SELECT APPROVE =========================
                $("#select_jenis_objek_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_objek_sewa_beli_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_kota_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_hak_tanah_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_kecamatan_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_pbg_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_kelurahan_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_wilayah_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_regional_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_cluster_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_lokasi_approve").select2({
                    dropdownParent: $("#approveModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

            } else {

                console.error('Flowbite Modal tidak terdeteksi. Pastikan flowbite.min.js sudah dimuat.');

            }

        });

        $(document).on('click', '#button_close_modal_edit', function() {

            const modalEl = document.getElementById('approveModal');

            if (typeof Modal !== 'undefined') {

                const modal = new Modal(modalEl);
                modal.hide();

            } else {

                console.error('Flowbite Modal tidak terdeteksi. Pastikan flowbite.min.js sudah dimuat.');

            }

        });

        $(document).on('click', '#button_edit_modal', function() {

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

                    if (response.flag == 1) {
                        $("#status_edit").attr('checked', true);
                    } else if (response.flag == 0) {
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

            if (status == 1) {
                var flag = 1;
            } else {
                var flag = 0;
            }

            $.ajax({
                type: 'POST',
                url: "{{ url('/post-approve-vendor') }}",
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
                        target: document.getElementById('approveModal'),
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
