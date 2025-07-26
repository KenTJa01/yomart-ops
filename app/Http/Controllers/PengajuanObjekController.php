<?php

namespace App\Http\Controllers;

use App\Exceptions\CommonCustomException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\DependentDropdownController;
use App\Models\Pengajuan_lokasi;
use App\Models\Pengajuan_lokasi_attachment;
use Carbon\Carbon;

class PengajuanObjekController extends Controller
{

    public function PengajuanObjekPage()
    {
        $kota = (new DependentDropdownController)->allCities();
        return view('kelola_lokasi.pengajuan_objek', compact('kota'));
    }

    public function getPengajuanObjekListDatatable(Request $request)
    {
        $sql = ("SELECT pl.id, pl.nomor_pengajuan, pl.alamat_lengkap, pl.rt, pl.rw, pl.kelurahan, pl.kecamatan, pl.wilayah, pl.kota, pl.pic, pl.tlp_pic, CONCAT(pl.panjang_tanah, ' x ', pl.lebar_tanah) as luas_tanah, CONCAT(pl.panjang_bangunan, ' x ', pl.lebar_bangunan) as luas_bangunan, pl.status_pengajuan, (CASE WHEN pl.status_pengajuan=1 THEN 'Active' ELSE 'Non-active' END) AS status_pengajuan
                    FROM pengajuan_lokasiS pl
                    ORDER BY pl.id ASC");

        $data = DB::select($sql);

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn("actions", function($row) {
                $buttons = '';

                $buttons = '
                    <button type="button" class="dropdown-trigger-button p-2 rounded-lg bg-white hover:bg-gray-100 focus:bg-gray-100" data-id="' . $row->id . '">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 4 15" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                    </button>';


                return $buttons;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function postNewPengajuanObjek(Request $request)
    {

        $user = Auth::user();

        $validate = Validator::make($request->all(), [
            'tanggal_waktu' => ['required', 'string'],
            'bentuk_objek' => ['required', 'string'],
            'jenis_objek' => ['required', 'string'],
            'objek_sewa_beli' => ['required', 'string'],

            'alamat' => ['required', 'string'],
            'lokasi' => ['required', 'string'],
            'panjang_lb' => ['required'],
            'lebar_lb' => ['required'],
            'panjang_lt' => ['required'],
            'lebar_lt' => ['required'],
            'rt' => ['required', 'string'],
            'rw' => ['required', 'string'],
            'kode_kota' => ['required'],
            'kota' => ['required'],
            'kode_kecamatan' => ['required'],
            'kecamatan' => ['required'],
            'kode_kelurahan' => ['required'],
            'kelurahan' => ['required'],
            'hak_tanah' => ['required', 'string'],
            'pbg' => ['required', 'string'],
            'keterangan_pbg' => ['nullable', 'string'],
            'wilayah' => ['required', 'string'],
            'perkiraan_biaya' => ['required', 'integer'],
            'keterangan' => ['nullable', 'string'],
            'periode_sewa' => ['required', 'string'],

            'pic' => ['required', 'string'],
            'no_telp' => ['required', 'string'],

            'files' => ['required'],
            'files.*' => ['file', 'mimes:jpg,jpeg,png,pdf,doc,docx', 'max:20480'],
        ]);

        if ($validate->fails()) {
            throw new ValidationException($validate);
        }
        $validated = $validate->validated();

        $tanggalPengajuan = Carbon::createFromFormat('Y-m-d', $validated['tanggal_waktu'], 'Asia/Jakarta')->setTimezone('Asia/Jakarta');
        $pgjDateMonthYear = Carbon::parse($tanggalPengajuan)->setTimezone('Asia/Jakarta')->format('m.y');
        $prefixNoPengajuan = 'POB/'.$pgjDateMonthYear.'/';

        $sql = ("SELECT COALESCE(MAX(TO_NUMBER(RIGHT(nomor_pengajuan,3), '999')),0) AS no FROM pengajuan_lokasis WHERE nomor_pengajuan LIKE '$prefixNoPengajuan%'");
        $data = DB::select($sql);
        foreach ($data as $d) {
            $seqNum = $d->no + 1;
        }

        $nomor_pengajuan = $prefixNoPengajuan.str_pad($seqNum, 3, '0', STR_PAD_LEFT);

        $tanggal_waktu = $validated['tanggal_waktu'];
        $bentuk_objek = $validated['bentuk_objek'];
        $jenis_objek = $validated['jenis_objek'];
        $objek_sewa_beli = $validated['objek_sewa_beli'];

        $alamat = $validated['alamat'];
        $lokasi = $validated['lokasi'];
        $panjang_lb = $validated['panjang_lb'];
        $lebar_lb = $validated['lebar_lb'];
        $panjang_lt = $validated['panjang_lt'];
        $lebar_lt = $validated['lebar_lt'];
        $rt = $validated['rt'];
        $rw = $validated['rw'];
        $kode_kota = $validated['kode_kota'];
        $kota = $validated['kota'];
        $kode_kecamatan = $validated['kode_kecamatan'];
        $kecamatan = $validated['kecamatan'];
        $kode_kelurahan = $validated['kode_kelurahan'];
        $kelurahan = $validated['kelurahan'];
        $hak_tanah = $validated['hak_tanah'];
        $pbg = $validated['pbg'];
        $keterangan_pbg = $validated['keterangan_pbg'] ?? null;
        $wilayah = $validated['wilayah'];
        $perkiraan_biaya = $validated['perkiraan_biaya'];
        $keterangan = $validated['keterangan'] ?? null;
        $periode_sewa = $validated['periode_sewa'];

        $pic = $validated['pic'];
        $no_telp = $validated['no_telp'];

        DB::beginTransaction();
        try {

            $pengajuanObjekData = Pengajuan_lokasi::create([
                'nomor_pengajuan' => $nomor_pengajuan,
                'tanggal_pengajuan' => $tanggal_waktu,
                'jenis_objek' => $jenis_objek,
                'bentuk_objek' => $bentuk_objek,
                'sewa_beli' => $objek_sewa_beli,
                'alamat_lengkap' => $alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kode_kota' => $kode_kota,
                'kota' => $kota,
                'kode_kecamatan' => $kode_kecamatan,
                'kecamatan' => $kecamatan,
                'kode_kelurahan' => $kode_kelurahan,
                'kelurahan' => $kelurahan,
                'wilayah' => $wilayah,
                'perkiraan_biaya_sewa' => $perkiraan_biaya,
                'periode_sewa' => $periode_sewa,
                'lokasi' => $lokasi,
                'panjang_bangunan' => $panjang_lb,
                'lebar_bangunan' => $lebar_lb,
                'panjang_tanah' => $panjang_lt,
                'lebar_tanah' => $lebar_lt,
                'hak_atas_tanah' => $hak_tanah,
                'pbg' => $pbg,
                'keterangan_pbg' => $keterangan_pbg,
                'keterangan' => $keterangan,
                'pic' => $pic,
                'tlp_pic' => $no_telp,
                'status_pengajuan' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => $user?->id,
                'updated_by' => $user?->id,
            ]);

            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    if ($file->isValid()) {
                        $originalName = $file->getClientOriginalName();
                        $newName = time().'_'.$originalName;
                        $path = $file->storeAs('uploads', $newName, 'public');

                        Pengajuan_lokasi_attachment::create([
                            'id_pengajuan_lokasi' => $pengajuanObjekData->id,
                            'path' => $path,
                            'created_at' => now(),
                            'updated_at' => now(),
                            'created_by' => $user?->id,
                            'updated_by' => $user?->id,
                        ]);
                    }
                }
            }

            (string) $title = 'Success';
            (string) $message = 'Pengajuan Objek telah berhasil tersimpan dengan nomoer pengajuan: '.$nomor_pengajuan;
            (array) $data = [
                'trx_number' => $nomor_pengajuan,
            ];
            (string) $route = route('/kelola_lokasi/pengajuan_objek');

            DB::commit();
            return response()->json([
                'title' => $title,
                'message' => $message,
                'route' => $route,
                'data' => $data,
            ]);
        } catch (ValidationException $e) {
            DB::rollBack();
            Log::warning('Validation error when submit pengajuan objek request', ['userId' => $user?->id, 'userName' => $user?->name, 'errors' => $e->getMessage()]);
            throw $e;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw new CommonCustomException('Failed to submit pengajuan objek request', 422, $e);
        }
    }

    public function store(Request $request)
    {
        //Validate form data
            $validated = $request->validate([
                'tgl_waktu' => 'required|date',
                'select_objek_sewa_beli' => 'required|string',
                'select_jenis_objek' => 'required|string',
                'txt_alamat' => 'required|string',
                'lokasi' => 'required|string',
                'panjang_lb' => 'required|string',
                'lebar_lb' => 'required|string',
                'panjang_lt' => 'required|string',
                'lebar_lt' => 'required|string',
                'rt' => 'required|string',
                'rw' => 'required|string',
                'select_kota' => 'required|string',
                'select_hak_tanah' => 'required|string',
                'select_kecamatan' => 'required|string',
                'select_pbg' => 'required|string',
                'select_kelurahan' => 'required|string',
                'keterangan_pbg' => 'nullable|string',
                'select_wilayah' => 'required|string',
                'estimasi_biaya' => 'required|integer',
                'keterangan' => 'nullable|string',
                'periode_sewa' => 'required|string',
                'pic' => 'required|string',
                'telephone' => 'required|string',
                'attachments.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

        try {
            DB::beginTransaction();

            // Process main form data
                $datePrefix = date('dmy');

                // Get count of today's submissions
                $count = DB::table('pengajuan_lokasi')
                        ->whereDate('tanggal_pengajuan', DB::raw('CURRENT_DATE'))
                        ->count() + 1;

                // Format nomor pengajuan (POB_DDMMYY_001)
                $nomorPengajuan = 'POB_' . $datePrefix . '_' . str_pad($count, 3, '0', STR_PAD_LEFT);

                // Insert new record using DB facade
                $pengajuan = DB::table('pengajuan_lokasi')->insertGetId([
                    'nomor_pengajuan' => $nomorPengajuan,
                    'jenis_objek' => $validated['select_jenis_objek'],
                    'sewa_beli' => $validated['select_objek_sewa_beli'],
                    'PIC' => $validated['pic'],
                    'tlp_PIC' => $validated['telephone'],
                    'alamat_lengkap' => $validated['txt_alamat'],
                    'RT' => $validated['rt'],
                    'RW' => $validated['rw'],
                    'Kota' => $validated['select_kota'],
                    'Kecamatan' => $validated['select_kecamatan'],
                    'Kelurahan' => $validated['select_kelurahan'],
                    'Wilayah' => $validated['select_wilayah'],
                    'perkiraan_biaya_sewa' => $validated['estimasi_biaya'],
                    'periode_sewa' => $validated['periode_sewa'],
                    'lokasi' => $validated['lokasi'],
                    'panjang_bangunan' => $validated['panjang_lb'],
                    'lebar_bangunan' => $validated['lebar_lb'],
                    'panjang_tanah' => $validated['panjang_lt'],
                    'lebar_tanah' => $validated['lebar_lt'],
                    'hak_atas_tanah' => $validated['select_hak_tanah'],
                    'PBG' => $validated['select_pbg'],
                    'Keterangan_PBG' => $validated['keterangan_pbg'] ?? null,
                    'Keterangan' => $validated['keterangan'] ?? null,
                    'tanggal_pengajuan' => $validated['tgl_waktu'],
                    'status_pengajuan' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'updated_by' => auth()->id() ?? null,
                ]);

            // Process file uploads
            if ($request->hasFile('attachments')) {
                foreach ($request->file('attachments') as $file) {
                    $path = $file->store('pengajuan_attachments', 'public');

                    DB::table('pengajuan_lokasi_attachment')->insertGetId([
                        'id_pengajuan_lokasi' => $pengajuan,
                        'path' => $path,
                        'created_at' => now(),
                        'created_by' => auth()->id()
                    ]);
                }
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Pengajuan dan lampiran berhasil disimpan',
                'data' => $pengajuan
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // public function upload(Request $request)
    // {
    //     $request->validate([
    //         'pengajuan_id' => 'required|integer|exists:pengajuan_lokasi,id',
    //         'attachments.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    //     ]);

    //     try {
    //         $uploadedPaths = [];

    //         foreach ($request->file('attachments') as $file) {
    //             $path = $file->store('pengajuan_attachments', 'public');

    //             $attachment = DB::table('pengajuan_lokasi_attachments')->insertGetId([
    //                 'id_pengajuan_lokasi' => $request->pengajuan_id,
    //                 'path' => $path,
    //                 'created_at' => now(),
    //                 'created_by' => auth()->id()
    //             ]);

    //             $uploadedPaths[] = $path;
    //         }

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Files uploaded successfully',
    //             'paths' => $uploadedPaths
    //         ]);

    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Failed to upload files',
    //             'error' => $e->getMessage()
    //         ], 500);
    //     }
    // }
}
