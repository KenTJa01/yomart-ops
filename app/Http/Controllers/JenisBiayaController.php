<?php

namespace App\Http\Controllers;

use App\Exceptions\CommonCustomException;
use App\Models\Jenis_biaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

class JenisBiayaController extends Controller
{

    public function masterJenisBiayaPage()
    {

        return view('master_data.jenis_biaya');

    }

    public function getJenisBiayaListDatatable()
    {
        $user = Auth::user();

        $params = '';

        $sql = ("SELECT DISTINCT *, (CASE WHEN jb.flag=1 THEN 'Active' ELSE 'Non-active' END) AS status
                    FROM jenis_biayas jb
                    WHERE jb.id is not null
                        $params
                    ORDER BY jb.id ASC");

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

    public function postNewJenisBiaya(Request $request)
    {

        $user = Auth::user();

        /** Validate Input */
        $validate = Validator::make($request->all(), [
            'kode_jenis_biaya' => ['required', 'string'],
            'jenis_biaya' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
            'status' => ['required'],
        ]);


        if ($validate->fails()) {
            throw new ValidationException($validate);
        }
        (array) $validated = $validate->validated();

        $kode_jenis_biaya = $validated['kode_jenis_biaya'];
        $jenis_biaya = $validated['jenis_biaya'];
        $deskripsi = $validated['deskripsi'];

        $jenisBiayaCek = Jenis_biaya::where('kode_jenis_biaya', $kode_jenis_biaya)->first();
        if ( !is_null($jenisBiayaCek) ) {
            throw ValidationException::withMessages(['detail' => 'Kode Jenis Biaya telah digunakan!']);
        }

        $status = $validated['status'];

        DB::beginTransaction();
        try {

            $jenisBiayaData = Jenis_biaya::create([
                'kode_jenis_biaya' => $kode_jenis_biaya,
                'jenis_biaya' => $jenis_biaya,
                'deskripsi' => $deskripsi,
                'flag' => $status,
                'created_by' => $user?->id,
                'updated_by' => $user?->id,
            ]);

            (string) $title = 'Success';
            (string) $message = 'Data Jenis Biaya telah berhasil tersimpan dengan kode jenis biaya: '.$kode_jenis_biaya;
            (array) $data = [
                'trx_number' => $kode_jenis_biaya,
            ];
            (string) $route = route('/master_data/jenis_biaya');

            DB::commit();
            return response()->json([
                'title' => $title,
                'message' => $message,
                'route' => $route,
                'data' => $data,
            ]);
        } catch (ValidationException $e) {
            DB::rollBack();
            Log::warning('Validation error when submit jenis biaya request', ['userId' => $user?->id, 'userName' => $user?->name, 'errors' => $e->getMessage()]);
            throw $e;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw new CommonCustomException('Failed to submit jenis biaya request', 422, $e);
        }

    }

    public function getOldDataOfJenisBiaya(Request $request)
    {
        $data = Jenis_biaya::where('id', $request->jenis_biaya_id)->first();
        return response()->json($data);
    }

    public function postEditJenisBiaya(Request $request)
    {

        $user = Auth::user();

        /** Validate Input */
        $validate = Validator::make($request->all(), [
            'id_jenis_biaya' => ['required'],
            'kode_jenis_biaya' => ['required', 'string'],
            'jenis_biaya' => ['required', 'string'],
            'deskripsi' =>  ['required', 'string'],
            'status' => ['required'],
        ]);


        if ($validate->fails()) {
            throw new ValidationException($validate);
        }
        (array) $validated = $validate->validated();

        $kode_jenis_biaya = $validated['kode_jenis_biaya'];
        $jenis_biaya = $validated['jenis_biaya'];
        $deskripsi = $validated['deskripsi'];
        $status = $validated['status'];

        DB::beginTransaction();
        try {

            $jenisBiayaData = Jenis_biaya::where('id', $validated['id_jenis_biaya'])->first();

            $jenisBiayaData->kode_jenis_biaya = $kode_jenis_biaya;
            $jenisBiayaData->jenis_biaya = $jenis_biaya;
            $jenisBiayaData->deskripsi = $deskripsi;
            $jenisBiayaData->flag = $status;
            $jenisBiayaData->updated_by = $user?->id;
            $jenisBiayaData->save();


            (string) $title = 'Success';
            (string) $message = 'Data Jenis Biaya telah berhasil tersimpan dengan kode: '.$kode_jenis_biaya;
            (array) $data = [
                'trx_number' => $kode_jenis_biaya,
            ];
            (string) $route = route('/master_data/jenis_biaya');

            DB::commit();
            return response()->json([
                'title' => $title,
                'message' => $message,
                'route' => $route,
                'data' => $data,
            ]);
        } catch (ValidationException $e) {
            DB::rollBack();
            Log::warning('Validation error when submit jenis biaya request', ['userId' => $user?->id, 'userName' => $user?->name, 'errors' => $e->getMessage()]);
            throw $e;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw new CommonCustomException('Failed to submit jenis biaya request', 422, $e);
        }

    }

}
