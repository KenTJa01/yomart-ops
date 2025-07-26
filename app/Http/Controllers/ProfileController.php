<?php

namespace App\Http\Controllers;

use App\Exceptions\CommonCustomException;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Permission;
use App\Models\Profile;
use App\Models\Profile_menu;
use App\Models\Profile_permission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{

    public function masterProfilePage()
    {

        $response = MasterDataController::getAllDataMenu();
        $data = $response->getData(true);
        return view('master_data.profile', compact('data'));

    }

    public function getProfileListDatatable()
    {
        $user = Auth::user();

        // $isSuperAdmin = Profile::where("profile_name", "SUPERADMIN")->first();
        // $isAdmin = Profile::where("profile_name", "ADMIN")->first();
        $isSuperAdmin = 1;
        $isAdmin = 2;
        $isSuperman = 100;

        $params = '';

        // if ( $user->dgm_core_status != $isSuperAdmin ) {
        //     $params .= " AND u.dgm_core_status != ".$isSuperAdmin;
        // }

        // if ( $user->dgm_core_status != $isAdmin && $user->dgm_core_status != $isSuperAdmin ) {
        //     $params .= " AND u.dgm_core_status != ".$isAdmin. " AND u.dgm_core_status != ".$isSuperAdmin;
        // }

        // if ( $user->dgm_core_status != $isAdmin && $user->dgm_core_status != $isSuperAdmin && $user->dgm_core_status != $isSuperman ) {
        //     $params .= " AND u.dgm_core_status != ".$isAdmin. " AND u.dgm_core_status != ".$isSuperAdmin. " AND u.dgm_core_status != ".$isSuperman;
        // }

        // if ( $user->dgm_core_status != $isSuperman ) {
        //     $params .= " AND u.dgm_core_status != ".$isSuperman;
        // }

        // if ( $user->dgm_core_status != $isSuperAdmin && $user->dgm_core_status != $isSuperman ) {
        //     $params .= " AND u.dgm_core_status != ".$isSuperAdmin. " AND u.dgm_core_status != ".$isSuperman;
        // }

        // if ( $user->dgm_core_status != $isAdmin && $user->dgm_core_status != $isSuperAdmin && $user->dgm_core_status != $isSuperman ) {
        //     $params .= " AND u.dgm_core_status != ".$isAdmin. " AND u.dgm_core_status != ".$isSuperAdmin. " AND u.dgm_core_status != ".$isSuperman;
        // }

        $sql = ("SELECT DISTINCT *, (CASE WHEN p.flag=1 THEN 'Active' ELSE 'Non-active' END) AS status
                    FROM profiles p
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

    public function postNewProfile(Request $request)
    {

        $user = Auth::user();

        /** Validate Input */
        $validate = Validator::make($request->all(), [
            'tipe_profile' => ['required', 'string'],
            'profile_name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'data_permission' => ['required'],
            'status' => ['required'],
        ]);


        if ($validate->fails()) {
            throw new ValidationException($validate);
        }
        (array) $validated = $validate->validated();

        $tipe_profile = $validated['tipe_profile'];
        $profile_name = $validated['profile_name'];
        $description = $validated['description'];
        $status = $validated['status'];

        $data_permissions = $validated['data_permission'];

        DB::beginTransaction();
        try {

            $profileData = Profile::create([
                'profile_name' => $profile_name,
                'tipe_profile' => $tipe_profile,
                'description' => $description,
                'flag' => $status,
                'created_by' => $user?->id,
                'updated_by' => $user?->id,
            ]);

            foreach ($data_permissions as $dp) {

                $permission_data = Permission::where('key', $dp)->first();

                Profile_permission::firstOrCreate([
                    'profile_id' => $profileData->id,
                    'permission_id' => $permission_data->id,
                ], [
                    'created_by' => $user?->id,
                    'updated_by' => $user?->id,
                ]);

                $profileMenu = Profile_menu::where('profile_id', $profileData->id)->where('sub_menu_id', $permission_data->sub_menu_id)->first();

                if ($profileMenu == null){
                    Profile_menu::firstOrCreate([
                        'profile_id' => $profileData->id,
                        'sub_menu_id' => $permission_data->sub_menu_id,
                    ], [
                        'created_by' => $user?->id,
                        'updated_by' => $user?->id,
                    ]);
                }

            }

            (string) $title = 'Success';
            (string) $message = "Data Profile telah berhasil tersimpan dengan nama profile: ".$profile_name;
            (array) $data = [
                'trx_number' => $profile_name,
            ];
            (string) $route = route('/master_data/profile');

            DB::commit();
            return response()->json([
                'title' => $title,
                'message' => $message,
                'route' => $route,
                'data' => $data,
            ]);
        } catch (ValidationException $e) {
            DB::rollBack();
            Log::warning('Validation error when submit profile request', ['userId' => $user?->id, 'userName' => $user?->name, 'errors' => $e->getMessage()]);
            throw $e;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw new CommonCustomException('Failed to submit profile request', 422, $e);
        }

    }

    public function getOldDataOfProfile(Request $request)
    {
        $data = Profile::where('id', $request->profile_id)->first();
        return response()->json($data);
    }

    public function getProfilePermissionById(Request $request)
    {
        $dataPermissions = Profile_permission::where('profile_id', $request->profile_id)->pluck('permission_id')->toArray();
        return response()->json($dataPermissions);
    }

    public function getProfileMenuById(Request $request)
    {
        $dataPermissions = Profile_menu::where('profile_id', $request->profile_id)->pluck('sub_menu_id')->toArray();
        return response()->json($dataPermissions);
    }

}
