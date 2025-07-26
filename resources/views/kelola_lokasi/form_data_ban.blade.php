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

        {{-- MAIN HEADER --}}
        <div class="bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">
            <div class="flex items-center">
                <button id="button_new" type="button" class="flex items-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 focus:outline-none">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-floppy-fill mr-2" viewBox="0 0 16 16">
                        <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/>
                        <path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/>
                    </svg> --}}
                    Simpan
                </button>
                <span class="text-lg ml-2 font-semibold text-batman-900">Tambah Data BAN</span>
            </div>

            <hr class="my-4">


            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- TANGGAL WAKTU --}}
                        <td class="label_form" style="width: 15%">Tanggal Waktu</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="date" id="tanggal_waktu" class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="2">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 100px; margin: 0 30px; margin-top: -5px">
                        </td>

                        {{-- JENIS BAN --}}
                        <td class="label_form" style="width: 15%">Jenis BAN</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <select class="select-alamat-spesifikasi" name="select_jenis_ban" id="select_jenis_ban" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih jenis ban</option>
                                <option value="sewa_baru_reguler">Sewa Baru Reguler</option>
                                <option value="sewa_baru_instansi">Sewa Baru Instansi</option>
                                <option value="perpanjang_sewa">Perpanjang Sewa</option>
                                <option value="perpanjang_sewa_instansi">Perpanjang Sewa Instansi</option>
                                <option value="jual_beli_baru">Jual Beli Baru</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        {{-- NO. OBJEK --}}
                        <td class="label_form" style="width: 15%">No. Objek</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <select class="select-alamat-spesifikasi" name="select_no_objek" id="select_no_objek" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih objek sewa/beli</option>
                            </select>
                        </td>

                        <td></td>
                        <td class="" style="margin: 0; padding: 0;"></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- DATA NEGOSIATOR --}}
        <div class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">
            <div class="flex items-center">
                <span class="text-xl ml-2 font-semibold text-batman-900">Data Negosiator</span>
            </div>

            <hr class="my-4">


            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- LOKASI --}}
                        <td class="label_form" style="width: 15%">Lokasi</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <select class="select-alamat-spesifikasi" name="select_lokasi" id="select_lokasi" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih lokasi</option>
                            </select>
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="4">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 200px; margin: 0 30px; margin-top: -5px">
                        </td>

                        {{-- NO TELP NEGOSIATOR --}}
                        <td class="label_form" style="width: 15%">No. Telepon Pemilik</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukkan no. telp negosiator pemilik" id="no_telp_negosiator">
                        </td>
                    </tr>
                    <tr>
                        {{-- TEMPAT NEGO --}}
                        <td class="label_form" style="width: 15%">Tempat Nego</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <select class="select-alamat-spesifikasi" name="select_tempat_nego" id="select_tempat_nego" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih tempat</option>
                            </select>
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="keterangan" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        {{-- NEGOSIATOR YOMART --}}
                        <td class="label_form" style="width: 15%">Negosiator Yomart</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text" id="negosiator_yomart"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukkan negosiator yomart">
                        </td>
                    </tr>
                    <tr>
                        {{-- NEGOSIATOR PEMILIK --}}
                        <td class="label_form" style="width: 15%">Negosiator Pemilik</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text" id="negosiator_pemilik"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukkan negosiator pemilik">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- DATA OBJEK SEWA --}}
        <div class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">
            <div class="flex items-center">
                <span class="text-xl ml-2 font-semibold text-batman-900">Data Objek Sewa</span>
            </div>

            <hr class="my-4">


            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- OBJEK SEWA/BELI --}}
                        <td class="label_form" style="width: 15%">Objek Sewa/Beli</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan objek sewa/beli" id="objek_sewa_beli" disabled readonly>
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="7">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 370px; margin: 0 30px; margin-top: -5px">
                        </td>

                        {{-- LUAS BANGUNAN --}}
                        <td class="label_form" style="width: 15%">Luas Bangunan</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <div class="flex items-center" style="margin: 0; padding: 0;">

                                <input type="number" id="panjang_luas_bangunan"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Panjang" disabled readonly>

                                <input type="number" id="lebar_luas_bangunan"
                                class="mb-[7px] ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Lebar" disabled readonly>

                                <span class="ml-2 mr-2">m<sup>2</sup></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- BENTUK OBJEK SEWA --}}
                        <td class="label_form" style="width: 15%">Bentuk Objek Sewa</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan objek sewa/beli" id="objek_sewa_beli" disabled readonly>
                        </td>

                        {{-- LUAS TANAH --}}
                        <td class="label_form" style="width: 15%">Luas Tanah</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex items-center">

                                <input type="number" id="panjang_luas_tanah"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Panjang" disabled readonly>

                                <input type="number" id="lebar_luas_tanah"
                                class="mb-[7px] ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Lebar" disabled readonly>

                                <span class="ml-2 mr-2">m<sup>2</sup></span>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- ALAMAT LENGKAP --}}
                        <td class="label_form" style="width: 15%">Alamat Lengkap</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="alamat_lengkap" style="resize: none;" disabled readonly></textarea>
                        </td>

                        {{-- WILAYAH --}}
                        <td class="label_form" style="width: 15%">Wilayah</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan wilayah" id="wilayah" disabled readonly>
                        </td>
                    </tr>
                    <tr>
                        <td></td>

                        {{-- KECAMATAN --}}
                        <td class="label_form" style="width: 15%">Kecamatan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan kecamatan" id="kecamatan" disabled readonly>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        {{-- RT & RW --}}
                        <td>
                            <div class="flex" style="margin: 0; padding: 0;">
                                <input type="number" id="rt"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="RT" disabled readonly>
                                <input type="number" id="rw"
                                class="mb-[7px] ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="RW" disabled readonly>
                            </div>
                        </td>

                        {{-- KELURAHAN --}}
                        <td class="label_form" style="width: 15%">Kelurahan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan kelurahan" id="kelurahan" disabled readonly>
                        </td>
                    </tr>
                    <tr>
                        {{-- PEMILIK --}}
                        <td class="label_form" style="width: 15%">Pemilik</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan pemilik" id="pemilik" disabled readonly>
                        </td>

                        {{-- KOTA --}}
                        <td class="label_form" style="width: 15%">Kota</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan kota" id="kota" disabled readonly>
                        </td>
                    </tr>
                    <tr>
                        {{-- HAK ATAS TANAH --}}
                        <td class="label_form" style="width: 15%">Hak Atas Tanah</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan hak atas tanah" id="hak_atas_tanah" disabled readonly>
                        </td>

                        <td></td>
                        <td></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- SEWA BARU REGULER --}}
        <div id="data_sewa_reguler" class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- HARGA SEWA --}}
                        <td class="label_form" style="width: 15%">Harga Sewa</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan harga sewa" id="harga_sewa">
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="10">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 530px; margin: 0 30px; margin-top: -10px">
                        </td>

                        {{-- BEBAN PPH --}}
                        <td class="label_form" style="width: 15%">Beban PPH</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <select class="select-alamat-spesifikasi" name="select_beban_pph" id="select_beban_pph" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih beban pph</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        {{-- MASA SEWA --}}
                        <td class="label_form" style="width: 15%">Masa Sewa</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan masa sewa" id="masa_sewa">
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_beban_pph" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_masa_sewa" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>

                        {{-- PENEMPATAN TIANG LISTRIK --}}
                        <td class="label_form" style="width: 15%">Penempatan Tiang Listrik</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex gap-4 py-2.5">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900">Bersedia</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900">Tidak Bersedia</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- TERMIN BAYAR --}}
                        <td class="label_form" style="width: 15%">Termin Bayar</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex w-full">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="Masukkan bermin bayar" id="termin_bayar">
                                <button id="button_open_modal_termin" class="button_open_modal_termin mb-[7px] ml-2 bg-batman-800 px-4 rounded-lg text-white" data-modal-target="terminBayarModal" data-modal-toggle="terminBayarModal">
                                    <img src="{{ asset('svg/arrow_open.svg') }}" class="w-5 h-5">
                                </button>
                            </div>
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_tiang_listrik" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_tiang_listrik" style="resize: none;"></textarea>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="" style="margin: 0; padding: 0; width: 33%; height: 50px !important"></td>
                    </tr>
                    <tr>
                        {{-- UANG MUKA --}}
                        <td class="label_form" style="width: 15%">Uang Muka</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan uang muka" id="uang muka">
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_tiang_listrik" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="" style="margin: 0; padding: 0; width: 33%; height: 50px !important"></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- SEWA BARU INSTANSI --}}
        <div id="data_sewa_instansi" class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- SEWA --}}
                        <td class="label_form" style="width: 15%">Sewa</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex gap-2">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="Masukkan sewa" id="sewa">
                                <select class="select_persen_termin" name="select_sewa" id="select_sewa" style="width: 100%; height: 46px !important;">
                                    <option value="">Pilih sewa</option>
                                </select>
                                <button id="button_open_modal_termin" class="mb-[7px] bg-batman-800 px-4 rounded-lg text-white" data-modal-target="sewaModal" data-modal-toggle="sewaModal">
                                    <img src="{{ asset('svg/arrow_open.svg') }}" style="width: 45px; height: 45px;">
                                </button>
                            </div>
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="10">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 530px; margin: 0 30px; margin-top: -10px">
                        </td>

                        {{-- BEBAN PPH --}}
                        <td class="label_form" style="width: 15%">Beban PPH</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <select class="select-alamat-spesifikasi" name="select_beban_pph_sewa_instansi" id="select_beban_pph_sewa_instansi" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih beban pph</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_masa_sewa" style="resize: none;"></textarea>
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_beban_pph" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        {{-- TERMIN BAYAR --}}
                        <td class="label_form" style="width: 15%">Termin Bayar</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex w-full">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="Masukkan bermin bayar" id="termin_bayar">
                                <button id="button_open_modal_termin" class="button_open_modal_termin mb-[7px] ml-2 bg-batman-800 px-4 rounded-lg text-white" data-modal-target="terminBayarModal" data-modal-toggle="terminBayarModal">
                                    <img src="{{ asset('svg/arrow_open.svg') }}" class="w-5 h-5">
                                </button>
                            </div>
                        </td>

                        {{-- PENEMPATAN TIANG LISTRIK --}}
                        <td class="label_form" style="width: 15%">Penempatan Tiang Listrik</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex gap-4 py-2.5">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900">Bersedia</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900">Tidak Bersedia</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- COST OF MONEY --}}
                        <td class="label_form" style="width: 15%">Cost Of Money</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex gap-2">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="Masukkan cost of money" id="cost_of_money">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-s block w-[30%] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="IDR" id="cost_of_money_idr" disabled>
                            </div>
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_tiang_listrik" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_tiang_listrik" style="resize: none;"></textarea>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="" style="margin: 0; padding: 0; width: 33%; height: 50px !important"></td>
                    </tr>
                    <tr>
                        {{-- UANG MUKA --}}
                        <td class="label_form" style="width: 15%">Uang Muka</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan uang muka" id="uang muka">
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_tiang_listrik" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="" style="margin: 0; padding: 0; width: 33%; height: 50px !important"></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- PERPANJANG SEWA --}}
        <div id="data_perpanjang_sewa" class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- HARGA SEWA --}}
                        <td class="label_form" style="width: 15%">Harga Sewa</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan harga sewa" id="harga_sewa_perpanjang_sewa">
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="10">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 370px; margin: 0 30px; margin-top: -10px">
                        </td>

                        {{-- UANG MUKA --}}
                        <td class="label_form" style="width: 15%">Uang Muka</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan uang muka" id="uang_muka_perpanjang_sewa">
                        </td>
                    </tr>
                    <tr>
                        {{-- PERIODE SEWA --}}
                        <td class="label_form" style="width: 15%">Periode Sewa</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex gap-2">
                                <input type="date"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    id="tanggal_mulai_periode_sewa">
                                <input type="date"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    id="tanggal_akhir_periode_sewa">
                            </div>
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_uang_muka" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_periode_sewa" style="resize: none;"></textarea>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        {{-- PPH --}}
                        <td class="label_form" style="width: 15%">PPH</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <select class="select_persen_termin" name="select_pph_perpanjang_sewa" id="select_pph_perpanjang_sewa" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih pph</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        {{-- TERMIN BAYAR --}}
                        <td class="label_form" style="width: 15%">Termin Bayar</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex w-full">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="Masukkan bermin bayar" id="termin_bayar">
                                <button id="button_open_modal_termin" class="button_open_modal_termin mb-[7px] ml-2 bg-batman-800 px-4 rounded-lg text-white" data-modal-target="terminBayarModal" data-modal-toggle="terminBayarModal">
                                    <img src="{{ asset('svg/arrow_open.svg') }}" class="w-5 h-5">
                                </button>
                            </div>
                        </td>

                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_termin_bayar_perpanjang_sewa" style="resize: none;"></textarea>
                        </td>
                        <td></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- PERPANJANG SEWA INSTANSI --}}
        <div id="data_perpanjang_sewa_instansi" class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- SEWA --}}
                        <td class="label_form" style="width: 15%">Sewa</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex gap-2">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="Masukkan sewa" id="sewa">
                                <select class="select_persen_termin" name="select_sewa_perpanjang_sewa_instansi" id="select_sewa_perpanjang_sewa_instansi" style="width: 100%; height: 46px !important;">
                                    <option value="">Pilih sewa</option>
                                </select>
                                <button id="button_open_modal_termin" class="mb-[7px] bg-batman-800 px-4 rounded-lg text-white" data-modal-target="sewaModal" data-modal-toggle="sewaModal">
                                    <img src="{{ asset('svg/arrow_open.svg') }}" style="width: 45px; height: 45px;">
                                </button>
                            </div>
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="10">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 525px; margin: 0 30px; margin-top: -10px">
                        </td>

                        {{-- UANG MUKA --}}
                        <td class="label_form" style="width: 15%">Uang Muka</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan uang muka" id="uang_muka_perpanjang_sewa_instansi">
                        </td>
                    </tr>
                    <tr>
                        {{-- PERIODE SEWA --}}
                        <td class="label_form" style="width: 15%">Periode Sewa</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex gap-2">
                                <input type="date"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    id="tanggal_mulai_perpanjang_sewa_instansi">
                                <input type="date"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    id="tanggal_akhir_perpanjang_sewa_instansi">
                            </div>
                        </td>


                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_uang_muka_perpanjang_sewa_instansi" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_periode_sewa_perpanjang_sewa_instansi" style="resize: none;"></textarea>
                        </td>


                    </tr>
                    <tr>
                        <td></td>

                        {{-- PPH --}}
                        <td class="label_form" style="width: 15%">PPH</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <select class="select_persen_termin" name="select_pph_perpanjang_sewa_instansi" id="select_pph_perpanjang_sewa_instansi" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih pph</option>
                            </select>
                        </td>



                    </tr>
                    <tr>
                        {{-- TERMIN BAYAR --}}
                        <td class="label_form" style="width: 15%">Termin Bayar</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex w-full">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="Masukkan bermin bayar" id="termin_bayar">
                                <button id="button_open_modal_termin" class="button_open_modal_termin mb-[7px] ml-2 bg-batman-800 px-4 rounded-lg text-white" data-modal-target="terminBayarModal" data-modal-toggle="terminBayarModal">
                                    <img src="{{ asset('svg/arrow_open.svg') }}" class="w-5 h-5">
                                </button>
                            </div>
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_pph_perpanjang_sewa_instansi" style="resize: none;"></textarea>
                        </td>



                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_termin_bayar_perpanjang_sewa_instansi" style="resize: none;"></textarea>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>

                        {{-- PENEMPATAN TIANG LISTRIK --}}
                        <td class="label_form" style="width: 15%">Penempatan Tiang Listrik</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex gap-4 py-2.5">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900">Bersedia</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900">Tidak Bersedia</label>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        {{-- COST OF MONEY --}}
                        <td class="label_form" style="width: 15%">Cost Of Money</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex gap-2">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="Masukkan cost of money" id="cost_of_money_perpanjang_sewa_instansi">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-s block w-[30%] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="IDR" id="cost_of_money_idr_perpanjang_sewa_instansi" disabled>
                            </div>
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_penempatan_tiang_listrik_perpanjang_sewa_instansi" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_tiang_listrik_perpanjang_sewa_instansi" style="resize: none;"></textarea>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="height: 50px"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- JUAL BELI BARU --}}
        <div id="data_jual_beli_baru" class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- HARGA SEWA --}}
                        <td class="label_form" style="width: 15%">Harga Sewa</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan harga sewa" id="harga_sewa_jual_beli_baru">
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="10">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 310px; margin: 0 30px; margin-top: -10px">
                        </td>

                        {{-- UANG MUKA --}}
                        <td class="label_form" style="width: 15%">Uang Muka</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan uang muka" id="uang_muka_jual_beli_baru">
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_harga_sewa_jual_beli_baru" style="resize: none;"></textarea>
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_uang_muka_jual_beli_baru" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        {{-- TERMIN BAYAR --}}
                        <td class="label_form" style="width: 15%">Termin Bayar</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <div class="flex w-full">
                                <input type="number"
                                    class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="Masukkan bermin bayar" id="termin_bayar">
                                <button id="button_open_modal_termin" class="button_open_modal_termin mb-[7px] ml-2 bg-batman-800 px-4 rounded-lg text-white" data-modal-target="terminBayarModal" data-modal-toggle="terminBayarModal">
                                    <img src="{{ asset('svg/arrow_open.svg') }}" class="w-5 h-5">
                                </button>
                            </div>
                        </td>

                        {{-- PPH --}}
                        <td class="label_form" style="width: 15%">PPH</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <select class="select_persen_termin" name="select_pph_jual_beli_baru" id="select_pph_jual_beli_baru" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih pph</option>
                            </select>
                        </td>
                    </tr>
                    <tr>


                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_termin_bayar_jual_beli_baru" style="resize: none;"></textarea>
                        </td>
                        <td></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- SEWA BARU REGULER | SEWA BARU INSTANSI | PERPANJANGAN SEWA INSTANSI --}}
        <div id="data_rekening_01" class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- NO. REKENING --}}
                        <td class="label_form" style="width: 15%">No. Rekening</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan no. rekening" id="no_rekening">
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="10">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 370px; margin: 0 30px; margin-top: -10px">
                        </td>

                        {{-- BEBAN PBG --}}
                        <td class="label_form" style="width: 15%">Beban PBG</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <select class="mb-[7px] select-alamat-spesifikasi" name="select_beban_pbg" id="select_beban_pbg" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih beban pbg</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        {{-- ATAS NAMA --}}
                        <td class="label_form" style="width: 15%">Atas Nama</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan atas nama" id="atas_nama">
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_beban_pbg" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        {{-- BANK --}}
                        <td class="label_form" style="width: 15%">Bank</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <div class="mb-[7px] flex w-full">
                                <select class="select-alamat-spesifikasi" name="select_bank" id="select_bank" style="width: 100%; height: 46px !important;">
                                    <option value="">Pilih bank</option>
                                </select>
                                <input type="text"
                                    class="ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="" id="input_bank">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- BEBAN PBB --}}
                        <td class="label_form" style="width: 15%">Beban PBB</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <select class="mb-[7px] select-alamat-spesifikasi" name="select_beban_pbb" id="select_beban_pbb" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih beban pbb</option>
                            </select>
                        </td>

                        {{-- JENIS BIAYA LAIN-LAIN --}}
                        <td class="label_form" style="width: 15%">Jenis Biaya Lain-lain</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan jenis biaya lain-lain" id="jenis_biaya_lain_lain">
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_tiang_listrik" style="resize: none;"></textarea>
                        </td>

                        {{-- CATATAN --}}
                        <td class="label_form" style="width: 15%">Catatan</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan catatan" id="catatan">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        {{-- LAMPIRAN --}}
                        <td class="label_form" style="width: 15%">Lampiran</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">

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
                        {{-- DEPOSIT --}}
                        <td class="label_form" style="width: 15%">Deposit</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan deposit" id="deposit">
                        </td>
                        <td></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- PERPANJANG SEWA --}}
        <div id="data_rekening_02" class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- NO. REKENING --}}
                        <td class="label_form" style="width: 15%">No. Rekening</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan no. rekening" id="no_rekening_data_rekening_02">
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="10">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 315px; margin: 0 30px; margin-top: -10px">
                        </td>

                        {{-- CATATAN --}}
                        <td class="label_form" style="width: 15%">Catatan</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan catatan" id="catatan_data_rekening_02">
                        </td>
                    </tr>
                    <tr>
                        {{-- ATAS NAMA --}}
                        <td class="label_form" style="width: 15%">Atas Nama</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan atas nama" id="atas_nama_data_rekening_02">
                        </td>

                        {{-- LAMPIRAN --}}
                        <td class="label_form" style="width: 15%">Lampiran</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">

                            <label for="upload_lampiran_data_rekening_02" class="inline-block cursor-pointer px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Pilih lampiran
                            </label>
                            <input id="upload_lampiran_data_rekening_02" type="file" accept="" multiple class="hidden">

                            <!-- Keterangan jumlah / nama file -->
                            <div id="file-info-lampiran-data-rekening-02" class="mt-2 text-sm text-gray-700 bg-white !border-batman-400"></div>

                            <script>
                                const inputLampiranDataRekening02 = document.getElementById('upload_lampiran_data_rekening_02');
                                const fileInfoLampiranDataRekening02 = document.getElementById('file-info-lampiran-data-rekening-02');

                                inputLampiranDataRekening02.addEventListener('change', function () {
                                    const total = this.files.length;

                                    if (total === 1) {
                                    fileInfoLampiranDataRekening02.textContent = this.files[0].name;
                                    } else if (total > 1) {
                                    fileInfoLampiranDataRekening02.textContent = `${total} lampiran telah dipilih`;
                                    } else {
                                    fileInfoLampiranDataRekening02.textContent = '';
                                    }
                                });
                            </script>
                        </td>
                    </tr>
                    <tr>
                        {{-- BANK --}}
                        <td class="label_form" style="width: 15%">Bank</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <div class="mb-[7px] flex w-full">
                                <select class="select-alamat-spesifikasi" name="select_bank_data_rekening_02" id="select_bank_data_rekening_02" style="width: 100%; height: 46px !important;">
                                    <option value="">Pilih bank</option>
                                </select>
                                <input type="text"
                                    class="ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="" id="input_bank_data_rekening_02">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- JENIS BIAYA PBB --}}
                        <td class="label_form" style="width: 15%">Jenis Biaya PBB</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <select class="mb-[7px] select-alamat-spesifikasi" name="select_jenis_biaya_pbb_data_rekening_02" id="select_jenis_biaya_pbb_data_rekening_02" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih beban pbb</option>
                            </select>
                        </td>

                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_jenis_biaya_pbb_data_rekening_02" style="resize: none;"></textarea>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

            </div>

        </div>

        {{-- JUAL BELI BARU --}}
        <div id="data_rekening_03" class="mt-3 bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="relative overflow-x-auto sm:rounded-lg px-2">

                <table style="width: 100%;">
                    <tr>
                        {{-- NO. REKENING --}}
                        <td class="label_form" style="width: 15%">No. Rekening</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan no. rekening" id="no_rekening_data_rekening_03">
                        </td>

                        {{-- VERTICAL LINE --}}
                        <td style="width: 4%" rowspan="10">
                            <hr style="border: none; border-left: 1px solid rgb(206, 206, 206); height: 310px; margin: 0 30px; margin-top: -10px">
                        </td>

                        {{-- JENIS BIAYA PBG --}}
                        <td class="label_form" style="width: 15%">Jenis Biaya PBG</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <select class="mb-[7px] select-alamat-spesifikasi" name="select_jenis_biaya_pbg_data_rekening_03" id="select_jenis_biaya_pbg_data_rekening_03" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih jenis biaya pbg</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        {{-- ATAS NAMA --}}
                        <td class="label_form" style="width: 15%">Atas Nama</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan atas nama" id="atas_nama_data_rekening_03">
                        </td>

                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_jenis_biaya_pbg_data_rekening_03" style="resize: none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        {{-- BANK --}}
                        <td class="label_form" style="width: 15%">Bank</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <div class="mb-[7px] flex w-full">
                                <select class="select-alamat-spesifikasi" name="select_bank_data_rekening_03" id="select_bank_data_rekening_03" style="width: 100%; height: 46px !important;">
                                    <option value="">Pilih bank</option>
                                </select>
                                <input type="text"
                                    class="ml-2 py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                    placeholder="" id="input_bank_data_rekening_03">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- JENIS BIAYA PBB --}}
                        <td class="label_form" style="width: 15%">Jenis Biaya PBB</td>
                        <td class="" style="margin: 0 !important; padding: 0; width: 33%">
                            <select class="mb-[7px] select-alamat-spesifikasi" name="select_jenis_biaya_pbb_data_rekening_03" id="select_jenis_biaya_pbb_data_rekening_03" style="width: 100%; height: 46px !important;">
                                <option value="">Pilih beban pbb</option>
                            </select>
                        </td>

                        {{-- CATATAN --}}
                        <td class="label_form" style="width: 15%">Catatan</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">
                            <input type="text"
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                placeholder="Masukkan catatan" id="catatan_data_rekening_03">
                        </td>
                    </tr>
                    <tr>
                        {{-- KETERANGAN --}}
                        <td class="label_form" style="width: 15%">Keterangan</td>
                        <td class="" style="margin: 0; padding: 0; width: 33%" rowspan="2">
                            <textarea
                                class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full h-[100px] border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200"
                                id="keterangan_jenis_biaya_pbb_data_rekening_03" style="resize: none;"></textarea>
                        </td>

                        {{-- LAMPIRAN --}}
                        <td class="label_form" style="width: 15%">Lampiran</td>
                        <td class="container_input_form" style="margin: 0; padding: 0; width: 33%">

                            <label for="upload_lampiran_data_rekening_03" class="inline-block cursor-pointer px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Pilih lampiran
                            </label>
                            <input id="upload_lampiran_data_rekening_03" type="file" accept="" multiple class="hidden">

                            <!-- Keterangan jumlah / nama file -->
                            <div id="file-info-lampiran-data-rekening-03" class="mt-2 text-sm text-gray-700 bg-white !border-batman-400"></div>

                            <script>
                                const inputLampiranDataRekening03 = document.getElementById('upload_lampiran_data_rekening_03');
                                const fileInfoLampiranDataRekening03 = document.getElementById('file-info-lampiran-data-rekening-03');

                                inputLampiranDataRekening03.addEventListener('change', function () {
                                    const total = this.files.length;

                                    if (total === 1) {
                                    fileInfoLampiranDataRekening03.textContent = this.files[0].name;
                                    } else if (total > 1) {
                                    fileInfoLampiranDataRekening03.textContent = `${total} lampiran telah dipilih`;
                                    } else {
                                    fileInfoLampiranDataRekening03.textContent = '';
                                    }
                                });
                            </script>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="height: 50px;"></td>
                        <td style="height: 50px;"></td>
                    </tr>
                </table>

            </div>

        </div>

    </div>

    <div id="terminBayarModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed inset-0 z-50 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full"></div>


        <div class="relative p-4 w-full !max-w-[800px] max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Termin Pembayaran
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="terminBayarModal">
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
                    <div class="flex flex-col" id="body_modal_termin">

                        <table style="width: 100%" id="table_termin">

                        </table>

                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_submit_modal" type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <div id="sewaModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed inset-0 z-50 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full"></div>


        <div class="relative p-4 w-full !max-w-[1000px] max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Harga Sewa
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="sewaModal">
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
                    <div class="flex flex-col" id="body_modal_sewa">

                        <table style="width: 100%" id="table_sewa">

                        </table>

                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_submit_modal" type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
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

        $(document).ready(function() {

            dataTable();

            $("#select_no_objek").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_jenis_ban").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_lokasi").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_tempat_nego").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_beban_pph").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_beban_pph_sewa_instansi").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_beban_pbg").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_bank").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_beban_pbb").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_sewa").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_pph_perpanjang_sewa").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_bank_data_rekening_02").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_jenis_biaya_pbb_data_rekening_02").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_sewa_perpanjang_sewa_instansi").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_pph_perpanjang_sewa_instansi").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_pph_jual_beli_baru").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

             $("#select_bank_data_rekening_03").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_jenis_biaya_pbb_data_rekening_03").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#select_jenis_biaya_pbg_data_rekening_03").select2({
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            $("#data_sewa_reguler").addClass("hidden");
            $("#data_sewa_instansi").addClass("hidden");
            $("#data_perpanjang_sewa").addClass("hidden");
            $("#data_perpanjang_sewa_instansi").addClass("hidden");
            $("#data_jual_beli_baru").addClass("hidden");

            $("#data_rekening_01").addClass("hidden");
            $("#data_rekening_02").addClass("hidden");
            $("#data_rekening_03").addClass("hidden");

            $(".button_open_modal_termin").prop("disabled", true);

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

        $(document).on('change', '#select_jenis_ban', function() {

            $jenisBAN = $(this).val();
            $("#table_termin").html("");

            if ( $jenisBAN == "" ) {

                $("#data_sewa_reguler").addClass("hidden");
                $("#data_sewa_instansi").addClass("hidden");
                $("#data_perpanjang_sewa").addClass("hidden");
                $("#data_perpanjang_sewa_instansi").addClass("hidden");
                $("#data_jual_beli_baru").addClass("hidden");

                $("#data_rekening_01").addClass("hidden");
                $("#data_rekening_02").addClass("hidden");
                $("#data_rekening_03").addClass("hidden");

            } else if ( $jenisBAN == "sewa_baru_reguler" ) {

                $("#data_sewa_reguler").removeClass("hidden");
                $("#data_sewa_instansi").addClass("hidden");
                $("#data_perpanjang_sewa").addClass("hidden");
                $("#data_perpanjang_sewa_instansi").addClass("hidden");
                $("#data_jual_beli_baru").addClass("hidden");

                $("#data_rekening_01").removeClass("hidden");
                $("#data_rekening_02").addClass("hidden");
                $("#data_rekening_03").addClass("hidden");

            } else if ( $jenisBAN == "sewa_baru_instansi" ) {

                $("#data_sewa_reguler").addClass("hidden");
                $("#data_sewa_instansi").removeClass("hidden");
                $("#data_perpanjang_sewa").addClass("hidden");
                $("#data_perpanjang_sewa_instansi").addClass("hidden");
                $("#data_jual_beli_baru").addClass("hidden");

                $("#data_rekening_01").removeClass("hidden");
                $("#data_rekening_02").addClass("hidden");
                $("#data_rekening_03").addClass("hidden");

            } else if ( $jenisBAN == "perpanjang_sewa" ) {

                $("#data_sewa_reguler").addClass("hidden");
                $("#data_sewa_instansi").addClass("hidden");
                $("#data_perpanjang_sewa").removeClass("hidden");
                $("#data_perpanjang_sewa_instansi").addClass("hidden");
                $("#data_jual_beli_baru").addClass("hidden");

                $("#data_rekening_01").addClass("hidden");
                $("#data_rekening_02").removeClass("hidden");

            } else if ( $jenisBAN == "perpanjang_sewa_instansi" ) {

                $("#data_sewa_reguler").addClass("hidden");
                $("#data_sewa_instansi").addClass("hidden");
                $("#data_perpanjang_sewa").addClass("hidden");
                $("#data_perpanjang_sewa_instansi").removeClass("hidden");
                $("#data_jual_beli_baru").addClass("hidden");

                $("#data_rekening_01").removeClass("hidden");
                $("#data_rekening_02").addClass("hidden");
                $("#data_rekening_03").addClass("hidden");

            } else if ( $jenisBAN == "jual_beli_baru" ) {

                $("#data_sewa_reguler").addClass("hidden");
                $("#data_sewa_instansi").addClass("hidden");
                $("#data_perpanjang_sewa").addClass("hidden");
                $("#data_perpanjang_sewa_instansi").addClass("hidden");
                $("#data_jual_beli_baru").removeClass("hidden");

                $("#data_rekening_01").addClass("hidden");
                $("#data_rekening_02").addClass("hidden");
                $("#data_rekening_03").removeClass("hidden");

            }

        });

        var indexTerminBayar = 0;

        $(document).on('change', '#termin_bayar', function() {

            $jmlTerminBayar = $(this).val();
            indexTerminBayar = 0;

            if ( $jmlTerminBayar > 0 ) {

                $(".button_open_modal_termin").prop("disabled", false);
                indexTerminBayar = $jmlTerminBayar;
                $("#table_termin").html("");

                for (let i = 0; i < $jmlTerminBayar; i++) {
                    $index = i+1
                    $("#table_termin").append(`
                        <tr>
                            <td style="20%">
                                Termin `+$index+`
                            </td>
                            <td style="80%">
                                <div class="flex gap-2">
                                    <input type="number" id="termin_bayar"
                                        class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200">
                                    <select class="select_persen_termin" name="select_persen_termin_`+$index+`" id="select_persen_termin_`+$index+`" style="width: 30%; height: 46px !important;">
                                        <option value="">Pilih %</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                    `);


                    $("#select_persen_termin_"+$index).select2({
                        dropdownParent: $("#terminBayarModal"),
                        placeholder: {
                            id: '-1',
                            textw: 'Select an option'
                        },
                        multiple: false
                    });

                }

            } else {

                $("#button_open_modal_termin").prop("disabled", true);

            }

        });

        var indexSewa = 0;

        $(document).on('change', '#sewa', function() {

            $jmlSewa = $(this).val();
            indexSewa = 0;

            if ( $jmlSewa > 0 ) {

                $(".button_open_modal_sewa").prop("disabled", false);
                indexSewa = $jmlSewa;
                $("#table_sewa").html("");

                for (let i = 0; i < $jmlSewa; i++) {
                    $index = i+1

                    if ( $index == 1 ) {
                        $("#table_sewa").append(`
                            <tr>
                                <td>
                                    Tahun-`+$index+`
                                </td>
                                <td>
                                    <input type="number" id="termin_bayar"
                                        class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200">
                                </td>
                                <td style="width: 15%">
                                    <span class="ml-4">Service Charge</span>
                                </td>
                                <td>
                                    <input type="number" id="termin_bayar"
                                        class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200">
                                </td>
                                <td style="width: 13%">
                                    <input type="number" id="termin_bayar"
                                        class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200">
                                </td>
                            </tr>

                        `);
                    } else {
                        $("#table_sewa").append(`
                            <tr>
                                <td>
                                    Tahun-`+$index+`
                                </td>
                                <td>
                                    <input type="number" id="termin_bayar"
                                        class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200">
                                </td>
                                <td style="width: 15%">
                                    <span class="ml-4">Service Charge</span>
                                </td>
                                <td>
                                    <input type="number" id="termin_bayar"
                                        class="mb-[7px] py-2.5 placeholder-batman-400 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled:bg-gray-200">
                                </td>
                                <td style="width: 13%"></td>
                            </tr>

                        `);
                    }



                    $("#select_persen_sewa_"+$index).select2({
                        dropdownParent: $("#terminBayarModal"),
                        placeholder: {
                            id: '-1',
                            textw: 'Select an option'
                        },
                        multiple: false
                    });

                }

            } else {

                $("#button_open_modal_sewa").prop("disabled", true);

            }

        });

    </script>

</x-app-layout>
