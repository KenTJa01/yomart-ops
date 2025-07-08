<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Permission::create([
            'key' => 'list_user',
            'sub_menu_id' => 1,
        ]);

        Permission::create([
            'key' => 'create_user',
            'sub_menu_id' => 1,
        ]);

        Permission::create([
            'key' => 'edit_user',
            'sub_menu_id' => 1,
        ]);

        Permission::create([
            'key' => 'reset_password_user',
            'sub_menu_id' => 1,
        ]);

        Permission::create([
            'key' => 'list_profile',
            'sub_menu_id' => 2,
        ]);

        Permission::create([
            'key' => 'create_profile',
            'sub_menu_id' => 2,
        ]);

        Permission::create([
            'key' => 'edit_profile',
            'sub_menu_id' => 2,
        ]);

        Permission::create([
            'key' => 'list_bakery',
            'sub_menu_id' => 3,
        ]);

        Permission::create([
            'key' => 'create_bakery',
            'sub_menu_id' => 3,
        ]);

        Permission::create([
            'key' => 'edit_bakery',
            'sub_menu_id' => 3,
        ]);

        Permission::create([
            'key' => 'list_cook_food',
            'sub_menu_id' => 4,
        ]);

        Permission::create([
            'key' => 'create_cook_food',
            'sub_menu_id' => 4,
        ]);

        Permission::create([
            'key' => 'edit_cook_food',
            'sub_menu_id' => 4,
        ]);

        Permission::create([
            'key' => 'list_fashion',
            'sub_menu_id' => 5,
        ]);

        Permission::create([
            'key' => 'create_fashion',
            'sub_menu_id' => 5,
        ]);

        Permission::create([
            'key' => 'edit_fashion',
            'sub_menu_id' => 5,
        ]);

        Permission::create([
            'key' => 'list_fresh',
            'sub_menu_id' => 6,
        ]);

        Permission::create([
            'key' => 'create_fresh',
            'sub_menu_id' => 6,
        ]);

        Permission::create([
            'key' => 'edit_fresh',
            'sub_menu_id' => 6,
        ]);

        Permission::create([
            'key' => 'list_jenis_biaya',
            'sub_menu_id' => 7,
        ]);

        Permission::create([
            'key' => 'create_jenis_biaya',
            'sub_menu_id' => 7,
        ]);

        Permission::create([
            'key' => 'edit_jenis_biaya',
            'sub_menu_id' => 7,
        ]);

        Permission::create([
            'key' => 'list_produk',
            'sub_menu_id' => 8,
        ]);

        Permission::create([
            'key' => 'create_produk',
            'sub_menu_id' => 8,
        ]);

        Permission::create([
            'key' => 'edit_produk',
            'sub_menu_id' => 8,
        ]);

        Permission::create([
            'key' => 'list_vendor',
            'sub_menu_id' => 9,
        ]);

        Permission::create([
            'key' => 'create_vendor',
            'sub_menu_id' => 9,
        ]);

        Permission::create([
            'key' => 'edit_vendor',
            'sub_menu_id' => 9,
        ]);

        Permission::create([
            'key' => 'list_pengajuan_objek',
            'sub_menu_id' => 10,
        ]);

        Permission::create([
            'key' => 'create_pengajuan_objek',
            'sub_menu_id' => 10,
        ]);

        Permission::create([
            'key' => 'edit_pengajuan_objek',
            'sub_menu_id' => 10,
        ]);

        Permission::create([
            'key' => 'list_data_objek',
            'sub_menu_id' => 11,
        ]);

        Permission::create([
            'key' => 'create_data_objek',
            'sub_menu_id' => 11,
        ]);

        Permission::create([
            'key' => 'edit_data_objek',
            'sub_menu_id' => 11,
        ]);

        Permission::create([
            'key' => 'list_data_ban',
            'sub_menu_id' => 12,
        ]);

        Permission::create([
            'key' => 'create_data_ban',
            'sub_menu_id' => 12,
        ]);

        Permission::create([
            'key' => 'edit_data_ban',
            'sub_menu_id' => 12,
        ]);

        Permission::create([
            'key' => 'list_biaya',
            'sub_menu_id' => 13,
        ]);

        Permission::create([
            'key' => 'create_biaya',
            'sub_menu_id' => 13,
        ]);

        Permission::create([
            'key' => 'edit_biaya',
            'sub_menu_id' => 13,
        ]);

        Permission::create([
            'key' => 'list_kelola_toko',
            'sub_menu_id' => 14,
        ]);

        Permission::create([
            'key' => 'create_kelola_toko',
            'sub_menu_id' => 15,
        ]);

    }
}
