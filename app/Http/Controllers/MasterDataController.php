<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Profile;
use App\Models\Submenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterDataController extends Controller
{

    public function getAllDataProfile()
    {
        $data = Profile::where('flag', 1)->get();
        return response()->json($data);
    }

    public static function getAllDataMenu()
    {

        $sql = ("SELECT m.menu_name, m.menu_url, sm.submenu_name, sm.submenu_url, p.key
                    FROM menus m
                    JOIN submenus sm ON sm.menu_id = m.id
                    LEFT JOIN permissions p ON p.sub_menu_id = sm.id
                    WHERE m.flag = 1
                        AND sm.flag = 1");

        $data = DB::select($sql);

        $grouped = [];

        foreach ($data as $item) {
            $menuName = $item->menu_name;
            $submenuName = $item->submenu_name;

            if (!isset($grouped[$menuName])) {
                $grouped[$menuName] = [];
            }

            if (!isset($grouped[$menuName][$submenuName])) {
                $grouped[$menuName][$submenuName] = [];
            }

            $grouped[$menuName][$submenuName][] = ['key' => $item->key];
        }

        $result = [];
        foreach ($grouped as $menu => $submenus) {
            $submenuList = [];
            foreach ($submenus as $submenu => $actions) {
                $submenuList[] = [
                    'submenu_name' => $submenu,
                    'actions' => $actions,
                ];
            }

            $result[] = [
                'menu_name' => $menu,
                'submenu' => $submenuList,
            ];
        }

        return response()->json($result);

    }

    public function getAllDataSubMenu()
    {

        $data = Submenu::all();
        return response()->json($data);
    }

    public function getAllDataPermission()
    {

        $data = Permission::all();
        return response()->json($data);
    }
}
