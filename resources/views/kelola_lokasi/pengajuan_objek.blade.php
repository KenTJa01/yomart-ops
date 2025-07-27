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

        /* Untuk header utama */
        table.dataTable thead th {
            background-color: #3d3d3d !important; /* warna gelap, seperti bg-batman-900 */
            color: #ffffff !important;
        }

        /* Untuk cloned header kiri/kanan */
        .DTFC_Cloned thead th {
            color: #ffffff !important;
            z-index: 5;
        }

        /* .dataTables_scrollBody::-webkit-scrollbar {
            display: none;
        }
        .dataTables_scrollBody {
            scrollbar-width: none;
            -ms-overflow-style: none;
        } */

        #newCreationModal {
            z-index: 9999;
        }

        #editModal {
            z-index: 9999;
        }

        #globalDropdownMenu {
            transition: opacity 0.2s ease;
        }

        /* Custom z-index swal */
        .swal2-container {
        z-index: 9999 !important; /* atau nilai yang kamu butuhkan */
        }
        .swal2-popup {
            z-index: 99999999 !important;
        }

    </style>

    <div class="rounded-lg">

        <div class="bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">
            <div class="flex items-center">
                <button id="button_new" data-modal-target="newCreationModal" data-modal-toggle="newCreationModal"
                    type="button"
                    class="flex items-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 focus:outline-none">
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
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 200px">No. Pengajuan</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 300px">Alamat</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 110px">RT</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 110px">RW</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 150px">Kelurahan</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 150px">Kecamatan</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 150px">Wilayah</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 200px">Kota/Kabupaten</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 150px">PIC</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 200px">Kontak Perorangan</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 200px">Luas Tanah (m2)</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 200px">Luas Bangunan (m2)</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0" style="width: 200px">Status Pengajuan</th>
                            <th scope="col" class="top_right_tableData border-t-0 border-r-0"
                                style="width: 60px !important;">
                                <img src="{{ asset('svg/action.svg') }}" class="w-5 h-5 m-auto">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="bottom_left_tableData"></th>
                            <th>No. Pengajuan</th>
                            <th>Alamat</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Wilayah</th>
                            <th>Kota/Kabupaten</th>
                            <th>PIC</th>
                            <th>Kontak Perorangan</th>
                            <th>Luas Tanah (m2)</th>
                            <th>Luas Bangunan (m2)</th>
                            <th>Status Pengajuan</th>
                            <th class="bottom_right_tableData"></th>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>

    </div>

    <!-- NEW CREATION MODAL -->
    <div id="newCreationModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-hidden overflow-x-hidden fixed inset-0 z-2 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full"></div>


        <div class="relative p-4 w-full !max-w-[1200px] max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tambah Data Objek
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
                <div class="p-4 md:p-5 space-y-4 overflow-y-auto h-full max-h-[60vh]">
                    <div class="flex flex-col">

                        <table style="width: 100%;">
                            <tr>
                                {{-- TANGGAL WAKTU --}}
                                <td class="label_form" style="width: 15%">Tanggal Waktu</td>
                                <td class="" style="margin: 0; padding: 0; width: 33%">
                                    <input type="date" id="tanggal_waktu" name="tanggal_waktu"
                                        class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required>
                                </td>

                                {{-- VERTICAL LINE --}}
                                <td style="width: 4%" rowspan="2">
                                    <hr class="vertical_line_two_row">
                                </td>

                                {{-- BENTUK OBJEK --}}
                                <td class="label_form" style="width: 15%">Bentuk Objek</td>
                                <td class="" style="margin: 0; padding: 0; width: 33%">
                                    <select class="" name="select_bentuk_objek" id="select_bentuk_objek" name="select_bentuk_objek" style="width: 100%; height: 46px !important;" required>
                                        <option value="">Pilih bentuk objek</option>
                                        <option value="rumah_tinggal">Rumah Tinggal</option>
                                        <option value="tanah_kosong">Tanah Kosong</option>
                                        <option value="ruko">Ruko</option>
                                        <option value="toko_kios">Toko / Kios</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                {{-- JENIS OBJEK --}}
                                <td class="label_form" for="status">Jenis Objek</td>
                                <td class="container_input_form" style="margin: 0; padding: 0;">
                                    <select class="" name="select_jenis_objek" id="select_jenis_objek" name="select_jenis_objek" style="width: 100%; height: 46px !important;" required>
                                        <option value="">Pilih jenis objek</option>
                                        <option value="sewa_baru">Sewa Baru</option>
                                        <option value="beli_baru">Beli Baru</option>
                                    </select>
                                </td>

                                {{-- OBJEK SEWA/BELI --}}
                                <td class="label_form" style="width: 15%">Objek Sewa/Beli</td>
                                <td class="" style="margin: 0; padding: 0; width: 33%">
                                    <select class="" name="select_objek_sewa_beli" id="select_objek_sewa_beli" name="select_objek_sewa_beli" style="width: 100%; height: 46px !important;" required>
                                        <option value="">Pilih objek sewa/beli</option>
                                        <option value="keseluruhan">Keseluruhan</option>
                                        <option value="sebagian">Sebagian</option>
                                    </select>
                                </td>
                            </tr>
                        </table>

                        {{-- GROUP OF TAB --}}
                        <div class="mb-4 border-b border-gray-200">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                                data-tabs-toggle="#default-tab-content" role="tablist">

                                {{-- TAB ALAMAT & SPESIFIKASI --}}
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                        data-tabs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Alamat & Spesifikasi</button>
                                </li>

                                {{-- <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                                        id="upload-tab" data-tabs-target="#upload" type="button"
                                        role="tab" aria-controls="upload" aria-selected="false">
                                        Upload
                                    </button>
                                </li> --}}

                                {{-- TAB DATA PEMILIK --}}
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                                        id="dashboard-tab" data-tabs-target="#dashboard" type="button"
                                        role="tab" aria-controls="dashboard" aria-selected="false">
                                        Data Pemilik
                                    </button>
                                </li>

                            </ul>
                        </div>

                        {{-- CONTENT OF TAB --}}
                        <div id="default-tab-content">

                            {{-- TAB ALAMAT & SPESIFIKASI --}}
                            <div class="hidden p-4 rounded-lg bg-gray-50" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">

                                <table style="width: 100%;">
                                    <tr>
                                        {{-- ALAMAT LENGKAP --}}
                                        <td class="label_form" style="width: 15%">Alamat Lengkap</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                                            <textarea
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                id="txt_alamat" name="txt_alamat" style="resize: none;" required></textarea>
                                        </td>

                                        {{-- VERTICAL LINE --}}
                                        <td style="width: 4%" rowspan="9">
                                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 470px; margin: 0 30px;">
                                        </td>

                                        {{-- LOKASI --}}
                                        <td class="label_form" style="width: 15%">Lokasi</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%">
                                            <input type="text" id="lokasi" name="lokasi"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan lokasi" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>

                                        {{-- LUAS BANGUNAN --}}
                                        <td class="label_form" style="width: 15%">Luas Bangunan</td>
                                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                                            <div class="mb-[7px] flex items-center" style="margin: 0; padding: 0;">

                                                <input type="number" id="panjang_lb" name="panjang_lb"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Panjang" required>

                                                <input type="number" id="lebar_lb" name="lebar_lb"
                                                class="ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Lebar" required>

                                                <span class="ml-2 mr-2">m<sup>2</sup></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>

                                        {{-- RT/RW --}}
                                        <td>
                                            <div class="mb-[7px] flex">
                                                <input type="number" id="rt" name="rt"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="RT" required>
                                                <input type="number" id="rw" name="rw"
                                                class="ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="RW" required>
                                            </div>
                                        </td>

                                        {{-- LUAS TANAH --}}
                                        <td class="label_form" style="width: 15%">Luas Tanah</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%">
                                            <div class="mb-[7px] flex items-center">

                                                <input type="number" id="panjang_lt" name="panjang_lt"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Panjang" required>

                                                <input type="number" id="lebar_lt" name="lebar_lt"
                                                class="ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Lebar" required>

                                                <span class="ml-2 mr-2">m<sup>2</sup></span>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- KOTA --}}
                                        <td class="label_form" style="width: 15%">Kota</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="" name="select_kota" id="select_kota" style="width: 100%; height: 46px !important;" required>
                                                <option value="">Pilih kota</option>
                                                @foreach ($kota as $item)
                                                    <option value="{{ $item->id ?? '' }}" name="{{ $item->name ?? '' }}">{{ $item->name ?? '' }}</option>
                                                @endforeach
                                            </select>
                                        </td>

                                        {{-- HAK TANAH --}}
                                        <td class="label_form" style="width: 15%">Hak Tanah</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="" name="select_hak_tanah" id="select_hak_tanah" style="width: 100%; height: 46px !important;" required>
                                                <option value="">Pilih hak tanah</option>
                                                <option value="hak_milik">Hak Milik</option>
                                                <option value="hak_guna_bangunan">Hak Guna Bangunan</option>
                                                <option value="hak_guna_usaha">Hak Guna Usaha</option>
                                                <option value="hak_pakai">Hak Pakai</option>
                                                <option value="hak_pengelolaan">Hak Pengelolaan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- KECAMATAN --}}
                                        <td class="label_form" style="width: 15%">Kecamatan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="" name="select_kecamatan" id="select_kecamatan" style="width: 100%; height: 46px !important;" required>
                                                <option value="">Pilih kecamatan</option>
                                            </select>
                                        </td>

                                        {{-- PBG --}}
                                        <td class="label_form" style="width: 15%">PBG</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="" name="select_pbg" id="select_pbg" style="width: 100%; height: 46px !important;" required>
                                                <option value="">Pilih pbg</option>
                                                <option value="1">Ada</option>
                                                <option value="2">Tidak Ada</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- KELURAHAN --}}
                                        <td class="label_form" style="width: 15%">Kelurahan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="" name="select_kelurahan" id="select_kelurahan" style="width: 100%; height: 46px !important;" required>
                                                <option value="">Pilih kelurahan</option>
                                            </select>
                                        </td>

                                        {{-- KETERANGAN PBG --}}
                                        <td class="label_form" style="width: 15%">Keterangan PBG</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="text" id="keterangan_pbg" name="keterangan_pbg"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan keterangan pbg" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- WILAYAH --}}
                                        <td class="label_form" style="width: 15%">Wilayah</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <select class="" name="select_wilayah" id="select_wilayah" style="width: 100%; height: 46px !important;">
                                                <option value="">Pilih wilayah</option>
                                                <option value="kota">Kota</option>
                                                <option value="kabupaten">Kabupaten</option>
                                            </select>
                                        </td>

                                        {{-- FOTO OBJEK SEWA --}}
                                        <td class="label_form" style="width: 15%">Foto Objek Sewa</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >

                                            <label for="upload" class="inline-block cursor-pointer px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                                Pilih Foto
                                            </label>

                                            <input id="upload" name="attachments[]" type="file" accept="image/*" multiple class="hidden">
                                            <div id="file-info" class="mt-2 text-sm text-gray-700 bg-white !border-batman-400"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- PERKIRAAN BIAYA --}}
                                        <td class="label_form" style="width: 15%">Perkiraan Biaya</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >
                                            <input type="number" id="perkiraan_biaya" name="perkiraan_biaya"
                                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan perkiraan biaya sewa" required>
                                        </td>

                                        {{-- KETERANGAN --}}
                                        <td class="label_form" style="width: 15%">Keterangan</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                                            <textarea
                                                id="keterangan" name="keterangan"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                id="" style="resize: none;"></textarea required>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- PERIODE SEWA --}}
                                        <td class="label_form" style="width: 15%">Periode Sewa</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%">
                                            <input type="text" id="periode_sewa" name="periode_sewa"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan periode sewa" required>
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
                            <div class="hidden p-4 rounded-lg bg-gray-50" id="dashboard"
                                role="tabpanel" aria-labelledby="dashboard-tab">

                                <table style="width: 47%;">
                                    <tr>
                                        {{-- PIC --}}
                                        <td class="label_form" style="width: 14%">PIC</td>
                                        <td class="" style="margin: 0; padding: 0; width: 34%" >
                                            <input type="text" id="pic" name="pic"
                                                class="mb-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan nama pic" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- NO. TELEPON --}}
                                        <td class="label_form" style="width: 14%">No. Telepon</td>
                                        <td class="" style="margin: 0; padding: 0; width: 34%" >
                                            <input type="text" id="no_telp" name="no_telp"
                                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                placeholder="Masukkan nomor telepon" required>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>



                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_reset_modal" type="button"
                        class="py-2.5 px-5 mr-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Reset</button>
                    <button id="button_submit_modal" type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <!-- EDIT MODAL -->
    <div id="editModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-hidden overflow-x-hidden fixed inset-0 z-50 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full" data-modal-hide="editModal"></div>


        <div class="relative p-4 w-full !max-w-[1200px] max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Edit Pengajuan Objek
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

                                <td class="label_form" style="width: 15%">Bentuk Objek</td>
                                <td class="" style="margin: 0; padding: 0; width: 33%">
                                    <select class="" name="select_bentuk_objek_approve" id="select_bentuk_objek_approve" name="select_bentuk_objek_approve" style="width: 100%; height: 46px !important;" required>
                                        <option value="">Pilih bentuk objek</option>
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

                                {{-- OBJEK SEWA/BELI --}}
                                <td class="label_form" style="width: 15%">Objek Sewa/Beli</td>
                                <td class="" style="margin: 0; padding: 0; width: 33%">
                                    <select class="select-alamat-spesifikasi" name="select_objek_sewa_beli_approve" id="select_objek_sewa_beli_approve" style="width: 100%; height: 46px !important;">
                                        <option value="">Pilih objek sewa/beli</option>
                                    </select>
                                </td>
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
                                        <td class="label_form" style="width: 15%">Foto Objek Sewa</td>
                                        <td class="" style="margin: 0; padding: 0; width: 33%" >

                                            <label for="upload-approve" class="inline-block cursor-pointer px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                                Pilih Foto
                                            </label>
                                            <input id="upload-approve" type="file" accept="image/*" multiple class="hidden">

                                            <!-- Keterangan jumlah / nama file -->
                                            <div id="file-info-approve" class="mt-2 text-sm text-gray-700 bg-white !border-batman-400"></div>
                                            <input id="upload-approve" name="attachments-approve[]" type="file" accept="image/*" multiple class="hidden">
                                            <div id="file-info-approve" class="mt-2 text-sm text-gray-700 bg-white !border-batman-400"></div>
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
                    <button id="button_submit_modal_edit" data-modal-hide="editModal" type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
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

    <div id="globalDropdownMenu" class="hidden absolute z-[9999] bg-white border border-gray-200 divide-y divide-gray-100 rounded-lg shadow-lg w-44">
        <ul class="py-2 text-sm text-gray-700">
            <li>
                <a href="#" class="button_edit_dropdown flex block px-4 py-2 hover:bg-gray-100" data-modal-target="editModal" data-modal-toggle="editModal" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="gray" class="mt-[2px] mr-3 bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                    </svg>
                    Edit
                </a>
            </li>
            <li>
                <a href="#" class="flex block px-4 py-2 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="gray" class="mt-[2px] mr-3 bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                    </svg>
                    View
                </a>
            </li>
            <li>
                <a href="#" class="flex block px-4 py-2 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="gray" class="mt-[2px] mr-3 bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                    </svg>
                    Delete
                </a>
            </li>
        </ul>
    </div>


    <script>

        // ========================= GLOBAL SETUP CSRF =========================
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let idEdit = null;

        $(document).ready(function() {

            dataTable();

            function setupGlobalDropdown() {
                const dropdown = document.getElementById("globalDropdownMenu");
                let currentTrigger = null;
                let isDropdownOpen = false;

                document.addEventListener("click", function (e) {
                    const trigger = e.target.closest(".dropdown-trigger-button");

                    // Kalau klik di tombol
                    if (trigger) {
                        e.preventDefault();

                        // Kalau klik tombol yang sama dan dropdown sedang terbuka => TUTUP
                        if (trigger === currentTrigger && isDropdownOpen) {
                            dropdown.classList.add("hidden");
                            currentTrigger = null;
                            isDropdownOpen = false;
                            return;
                        }

                        const rect = trigger.getBoundingClientRect();
                        const dropdownWidth = dropdown.offsetWidth;

                        dropdown.style.position = "absolute";
                        dropdown.style.top = `${rect.bottom + window.scrollY}px`;
                        dropdown.style.left = `${rect.right - dropdownWidth + window.scrollX}px`;

                        idEdit = trigger.getAttribute("data-id");
                        console.log(idEdit);

                        dropdown.classList.remove("hidden");
                        currentTrigger = trigger;
                        isDropdownOpen = true;
                        return;
                    }

                    // Klik di luar dropdown
                    if (!dropdown.contains(e.target)) {
                        dropdown.classList.add("hidden");
                        currentTrigger = null;
                        isDropdownOpen = false;
                    }
                });

                // Jika scroll, tutup dropdown
                window.addEventListener("scroll", function () {
                    dropdown.classList.add("hidden");
                    currentTrigger = null;
                    isDropdownOpen = false;
                }, true);
            }

            // Jalankan setelah draw DataTables
            $('#tableData').on('draw.dt', function () {
                setupGlobalDropdown();
            });

            // Pertama kali load
            setupGlobalDropdown();


            $("#select_jenis_objek").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_bentuk_objek").select2({
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

                if (i != 0 && i != 14) {
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
                scrollX: true,
                scrollCollapse: true,
                fixedColumns: {
                    rightColumns: 1,
                    leftColumns: 2
                },
                fixedHeader: true,
                ajax: {
                    type: 'GET',
                    url: `{{ route('get-pengajuan-objek-list-datatable') }}`,
                    data: {},
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nomor_pengajuan',
                        name: 'nomor_pengajuan',
                    },
                    {
                        data: 'alamat_lengkap',
                        name: 'alamat_lengkap',
                    },
                    {
                        data: 'rt',
                        name: 'rt',
                    },
                    {
                        data: 'rw',
                        name: 'rw',
                    },
                    {
                        data: 'kelurahan',
                        name: 'kelurahan',
                    },
                    {
                        data: 'kecamatan',
                        name: 'kecamatan',
                    },
                    {
                        data: 'wilayah',
                        name: 'wilayah',
                    },
                    {
                        data: 'kota',
                        name: 'kota',
                    },
                    {
                        data: 'pic',
                        name: 'pic',
                    },
                    {
                        data: 'tlp_pic',
                        name: 'tlp_pic',
                    },
                    {
                        data: 'luas_tanah',
                        name: 'luas_tanah',
                    },
                    {
                        data: 'luas_bangunan',
                        name: 'luas_bangunan',
                    },
                    {
                        data: 'status_pengajuan',
                        name: 'status_pengajuan',
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
                    targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]
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

        // ========================= RESET MODAL =========================
        $(document).on('click', '#button_reset_modal', function() {

            $('#tanggal_waktu').val('');
            $('#select_bentuk_objek').val('').trigger('change');
            $('#select_jenis_objek').val('').trigger('change');
            $('#select_objek_sewa_beli').val('').trigger('change');

            $('#txt_alamat').val('');
            $('#lokasi').val('');
            $('#panjang_lb').val('');
            $('#lebar_lb').val('');
            $('#rt').val('');
            $('#rw').val('');
            $('#panjang_lt').val('');
            $('#lebar_lt').val('');
            $('#select_kota').val('').trigger('change');
            $('#select_hak_tanah').val('').trigger('change');
            $('#select_kecamatan').val('').trigger('change');
            $('#select_pbg').val('').trigger('change');
            $('#select_kelurahan').val('').trigger('change');
            $('#keterangan_pbg').val('');
            $('#select_wilayah').val('').trigger('change');
            $('#perkiraan_biaya').val('');
            $('#keterangan').val('');
            $('#periode_sewa').val('');
            $('#pic').val('');
            $('#no_telp').val('');

        });

        // ========================= RESET NEW DATA =========================
        $(document).on('click', '#button_new', function() {

            $('#tanggal_waktu').val('');
            $('#select_bentuk_objek').val('').trigger('change');
            $('#select_jenis_objek').val('').trigger('change');
            $('#select_objek_sewa_beli').val('').trigger('change');

            $('#txt_alamat').val('');
            $('#lokasi').val('');
            $('#panjang_lb').val('');
            $('#lebar_lb').val('');
            $('#rt').val('');
            $('#rw').val('');
            $('#panjang_lt').val('');
            $('#lebar_lt').val('');
            $('#select_kota').val('').trigger('change');
            $('#select_hak_tanah').val('').trigger('change');
            $('#select_kecamatan').val('').trigger('change');
            $('#select_pbg').val('').trigger('change');
            $('#select_kelurahan').val('').trigger('change');
            $('#keterangan_pbg').val('');
            $('#select_wilayah').val('').trigger('change');
            $('#perkiraan_biaya').val('');
            $('#keterangan').val('');
            $('#periode_sewa').val('');
            $('#pic').val('');
            $('#no_telp').val('');

        });

        let selectedFiles = [];
        document.getElementById('upload').addEventListener('change', function () {

            const fileInfo = document.getElementById('file-info');
            selectedFiles = Array.from(this.files);

            if (selectedFiles.length === 1) {
                fileInfo.textContent = selectedFiles[0].name;
            } else if (selectedFiles.length > 1) {
                fileInfo.textContent = `${selectedFiles.length} foto telah dipilih`;
            } else {
                fileInfo.textContent = '';
            }

        });

        function onChangeSelect(url, id, name, placeholder) {

            $.ajax({
                url: url,
                type: 'GET',
                data: {
                id: id
                },
                success: function (data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option>Pilih ' + placeholder + '</option>');
                    $.each(data, function (key, value) {
                        $('#' + name).append('<option value="' + key + '" name="' + value + '">' + value + '</option>');
                    });
                }
            });

        };

        var tampungCityNew = "";
        var tampungDistrictNew = "";
        var tampungSubDistrictNew = "";

        $(document).on('change', '#select_kota', function(event) {

            $("#select_kecamatan").attr('disabled', false);
            $("#select_kecamatan").html('<option value="">Pilih kecamatan</option>');

            $("#select_kelurahan").attr('disabled', true);
            $("#select_kelurahan").html('<option value="">Pilih kelurahan</option>');

            var id_city = $(this).val();
            if (id_city !== null && id_city !== '') {

                var selectedCity = document.getElementById('select_kota');
                var optionCity = selectedCity.options[selectedCity.selectedIndex];
                tampungCityNew = optionCity.getAttribute('name');

                onChangeSelect('{{ route("districts") }}', id_city, 'select_kecamatan', 'kecamatan');

            }

        });

        $(document).on('change', '#select_kecamatan', function(event) {
            $("#select_kelurahan").attr('disabled', false);

            var id_district = $(this).val();
            if (id_district !== null && id_district !== '') {

                var selectedDistrict = document.getElementById('select_kecamatan');
                var optionDistrict = selectedDistrict.options[selectedDistrict.selectedIndex];
                tampungDistrictNew = optionDistrict.getAttribute('name');

                onChangeSelect('{{ route("villages") }}', id_district, 'select_kelurahan', 'kelurahan');

            }

        })

        $(document).on('change', '#select_kelurahan', function(event) {

            var selectedSubDistrict = document.getElementById('select_kelurahan');
            var optionSubDistrict = selectedSubDistrict.options[selectedSubDistrict.selectedIndex];
            tampungSubDistrictNew = optionSubDistrict.getAttribute('name');

        });

        // ========================= SUBMIT NEW DATA =========================
        $(document).on('click', '#button_submit_modal', function(event) {

            event.preventDefault();

            var tanggal_waktu = $("#tanggal_waktu").val();
            var bentuk_objek = $("#select_bentuk_objek").val();
            var jenis_objek = $("#select_jenis_objek").val();
            var objek_sewa_beli = $("#select_objek_sewa_beli").val();
            var alamat = $("#txt_alamat").val();
            var lokasi = $("#lokasi").val();
            var panjang_lb = $("#panjang_lb").val();
            var lebar_lb = $("#lebar_lb").val();
            var rt = $("#rt").val();
            var rw = $("#rw").val();
            var panjang_lt = $("#panjang_lt").val();
            var lebar_lt = $("#lebar_lt").val();

            var kode_kota = $("#select_kota").val();
            var kota = tampungCityNew;
            var kode_kecamatan = $("#select_kecamatan").val();
            var kecamatan = tampungDistrictNew;
            var kode_kelurahan = $("#select_kelurahan").val();
            var kelurahan = tampungSubDistrictNew;
            var hak_tanah = $("#select_hak_tanah").val();
            var pbg = $("#select_pbg").val();
            var keterangan_pbg = $("#keterangan_pbg").val();
            var wilayah = $("#select_wilayah").val();
            var perkiraan_biaya = $("#perkiraan_biaya").val();
            var keterangan = $("#keterangan").val();
            var periode_sewa = $("#periode_sewa").val();
            var pic = $("#pic").val();
            var no_telp = $("#no_telp").val();

            const input = document.getElementById('upload');
            const files = input.files;

            const formData = new FormData();

            for (let i = 0; i < files.length; i++) {
                formData.append('files[]', files[i]);
            }

            formData.append('tanggal_waktu', tanggal_waktu);
            formData.append('bentuk_objek', bentuk_objek);
            formData.append('jenis_objek', jenis_objek);
            formData.append('objek_sewa_beli', objek_sewa_beli);
            formData.append('alamat', alamat);
            formData.append('lokasi', lokasi);
            formData.append('panjang_lb', panjang_lb);
            formData.append('lebar_lb', lebar_lb);
            formData.append('rt', rt);
            formData.append('rw', rw);
            formData.append('panjang_lt', panjang_lt);
            formData.append('lebar_lt', lebar_lt);
            formData.append('kode_kota', kode_kota);
            formData.append('kota', kota);
            formData.append('kode_kecamatan', kode_kecamatan);
            formData.append('kecamatan', kecamatan);
            formData.append('kode_kelurahan', kode_kelurahan);
            formData.append('kelurahan', kelurahan);
            formData.append('hak_tanah', hak_tanah);
            formData.append('pbg', pbg);
            formData.append('keterangan_pbg', keterangan_pbg);
            formData.append('wilayah', wilayah);
            formData.append('perkiraan_biaya', perkiraan_biaya);
            formData.append('keterangan', keterangan);
            formData.append('periode_sewa', periode_sewa);
            formData.append('pic', pic);
            formData.append('no_telp', no_telp);

            $.ajax({
                type: 'POST',
                url: "{{ url('/post-new-pengajuan-objek') }}",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);

                    return Swal.fire({
                        title: response.title,
                        text: response.message,
                        timer: 5000,
                        icon: "success",
                        timerProgressBar: true,
                        showConfirmButton: true,
                        confirmButtonColor: "#DFBA86",
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
                        text: error.responseJSON.message ?? 'Gagal mengirim pengajuan objek.',
                        target: document.getElementById('newCreationModal'),
                    });
                    $("#button_submit_modal").prop('disabled', false);
                },
            });

        });

        $(document).on('click', '.button_edit_dropdown', function() {

            const modalEl = document.getElementById('editModal');

            const dropdown = document.getElementById("globalDropdownMenu");
            dropdown.classList.add("hidden");
            currentTrigger = null;
            isDropdownOpen = false;

            if (typeof Modal !== 'undefined') {

                const modal = new Modal(modalEl);
                modal.show();

                $("#select_jenis_objek_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_bentuk_objek_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_objek_sewa_beli_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_kota_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_regional_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_cluster_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_lokasi_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_hak_tanah_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_kecamatan_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_pbg_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_kelurahan_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $("#select_wilayah_approve").select2({
                    dropdownParent: $("#newCreationModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                $.ajax({
                    type: 'GET',
                    url: "{{ url('/get-old-data-of-pengajuan-objek') }}",
                    dataType: 'json',
                    data: {
                        objek_id: idEdit,
                    },
                    success: function(response) {
                        console.log(response);
                        return;

                        // $("#user_id_edit").val(response.id);
                        // $("#username_edit").val(response.username);
                        // $("#name_edit").val(response.name);

                        // if ( response.is_active == 1 ) {
                        //     $("#status_edit").attr('checked', true);
                        // } else if ( response.is_active == 0 ) {
                        //     $("#status_edit").attr('checked', false);
                        // }

                        // $("#select_profile_edit").html('');
                        // getProfileById(response.profile_id);

                    },
                    error: function(error) {
                        console.log(error.responseJSON);
                        Swal.fire({
                            icon: 'error',
                            title: "Error",
                            text: error.responseJSON.message ?? 'Failed get list of user',
                            showConfirmButton: true,
                            confirmButtonColor: "#c1141b",
                            customClass: {
                                confirmButton: 'custom-confirm-button-swal'
                            },
                        });
                    },
                });


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

        $(document).on('click', '#upload-approve', function() {

            const inputApprove = document.getElementById('upload-approve');
            const fileInfoApprove = document.getElementById('file-info-approve');
            let selectedFilesApprove = [];

            inputApprove.addEventListener('change', function() {
                selectedFilesApprove = Array.from(this.files);

                if (selectedFilesApprove.length === 1) {
                    fileInfoApprove.textContent = selectedFilesApprove[0].name;
                } else if (selectedFilesApprove.length > 1) {
                    fileInfoApprove.textContent = `${selectedFilesApprove.length} foto telah dipilih`;
                } else {
                    fileInfoApprove.textContent = '';
                }
            });

        });


    </script>

</x-app-layout>
