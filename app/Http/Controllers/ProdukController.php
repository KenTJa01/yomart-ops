<?php

namespace App\Http\Controllers;

use App\Exceptions\CommonCustomException;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
{

    public function masterProdukPage()
    {

        return view('master_data.produk');

    }

    public function getProdukListDatatable()
    {
        $user = Auth::user();

        $params = '';

        $sql = ("SELECT DISTINCT *, (CASE WHEN p.flag=1 THEN 'Active' ELSE 'Non-active' END) AS status
                    FROM produks p
                    WHERE p.id is not null
                        $params
                    ORDER BY p.id ASC");

        // $sqlPermissionEdit = ("SELECT pp.id, perm.key, s.submenu_name, u.username
        //                         FROM profile_permissions pp, permissions perm, submenus s, profiles p, users u
        //                         WHERE pp.profile_id = p.id
        //                             AND pp.permission_id = perm.id
        //                             AND u.profile_id = p.id
        //                             AND perm.sub_menu_id = s.id
        //                             AND perm.sub_menu_id = 1
        //                             AND perm.key = 'master_user_edit'
        //                             AND u.id = $user->id");

        // $sqlPermissionReset = ("SELECT pp.id, perm.key, s.submenu_name, u.username
        //                         FROM profile_permissions pp, permissions perm, submenus s, profiles p, users u
        //                         WHERE pp.profile_id = p.id
        //                             AND pp.permission_id = perm.id
        //                             AND u.profile_id = p.id
        //                             AND perm.sub_menu_id = s.id
        //                             AND perm.sub_menu_id = 1
        //                             AND perm.key = 'master_user_reset'
        //                             AND u.id = $user->id");

        // $canEdit = DB::select($sqlPermissionEdit);
        // $canReset = DB::select($sqlPermissionReset);

        $data = DB::select($sql);

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn("actions", function($row) {
                $buttons = '';

                $buttons = '
                    <button type="button" class="button_edit" title="Edit Site" id="button_edit_modal" data-modal-target="editModal" data-modal-toggle="editModal" data-id="'.$row->id.'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                        </svg>
                    </button>';

                return $buttons;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function postNewProduk(Request $request)
    {

        $user = Auth::user();

        /** Validate Input */
        $validate = Validator::make($request->all(), [
            'kode_produk' => ['required', 'string'],
            'nama_produk' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
            'status' => ['required'],
        ]);


        if ($validate->fails()) {
            throw new ValidationException($validate);
        }
        (array) $validated = $validate->validated();

        $kode_produk = $validated['kode_produk'];
        $nama_produk = $validated['nama_produk'];
        $deskripsi = $validated['deskripsi'];

        $produkCek = Produk::where('kode_produk', $kode_produk)->first();
        if ( !is_null($produkCek) ) {
            throw ValidationException::withMessages(['detail' => 'Kode Produk telah digunakan!']);
        }

        $status = $validated['status'];

        DB::beginTransaction();
        try {

            $produkData = Produk::create([
                'kode_produk' => $kode_produk,
                'nama_produk' => $nama_produk,
                'deskripsi' => $deskripsi,
                'flag' => $status,
                'created_by' => $user?->id,
                'updated_by' => $user?->id,
            ]);

            (string) $title = 'Success';
            (string) $message = 'Data Produk telah berhasil tersimpan dengan kode produk: '.$kode_produk;
            (array) $data = [
                'trx_number' => $kode_produk,
            ];
            (string) $route = route('/master_data/produk');

            DB::commit();
            return response()->json([
                'title' => $title,
                'message' => $message,
                'route' => $route,
                'data' => $data,
            ]);
        } catch (ValidationException $e) {
            DB::rollBack();
            Log::warning('Validation error when submit produk request', ['userId' => $user?->id, 'userName' => $user?->name, 'errors' => $e->getMessage()]);
            throw $e;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw new CommonCustomException('Failed to submit produk request', 422, $e);
        }

    }

    public function getOldDataOfProduk(Request $request)
    {
        $data = Produk::where('id', $request->produk_id)->first();
        return response()->json($data);
    }

    public function postEditProduk(Request $request)
    {

        $user = Auth::user();

        /** Validate Input */
        $validate = Validator::make($request->all(), [
            'id_produk' => ['required'],
            'kode_produk' => ['required', 'string'],
            'nama_produk' => ['required', 'string'],
            'deskripsi' =>  ['required', 'string'],
            'status' => ['required'],
        ]);


        if ($validate->fails()) {
            throw new ValidationException($validate);
        }
        (array) $validated = $validate->validated();

        $kode_produk = $validated['kode_produk'];
        $nama_produk = $validated['nama_produk'];
        $deskripsi = $validated['deskripsi'];
        $status = $validated['status'];

        DB::beginTransaction();
        try {

            $produkData = Produk::where('id', $validated['id_produk'])->first();

            $produkData->kode_produk = $kode_produk;
            $produkData->nama_produk = $nama_produk;
            $produkData->deskripsi = $deskripsi;
            $produkData->flag = $status;
            $produkData->updated_by = $user?->id;
            $produkData->save();


            (string) $title = 'Success';
            (string) $message = 'Data Produk telah berhasil tersimpan dengan kode: '.$kode_produk;
            (array) $data = [
                'trx_number' => $kode_produk,
            ];
            (string) $route = route('/master_data/produk');

            DB::commit();
            return response()->json([
                'title' => $title,
                'message' => $message,
                'route' => $route,
                'data' => $data,
            ]);
        } catch (ValidationException $e) {
            DB::rollBack();
            Log::warning('Validation error when submit produk request', ['userId' => $user?->id, 'userName' => $user?->name, 'errors' => $e->getMessage()]);
            throw $e;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw new CommonCustomException('Failed to submit produk request', 422, $e);
        }

    }

}
