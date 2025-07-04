<?php

namespace Database\Seeders;

use App\Models\Submenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Submenu::create([
            'menu_id' => 1,
            'submenu_name' => 'User',
            'submenu_url' => '/master_data/user',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 1,
            'submenu_name' => 'Profile',
            'submenu_url' => '/master_data/profile',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 1,
            'submenu_name' => 'Bakery',
            'submenu_url' => '/master_data/bakery',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 1,
            'submenu_name' => 'Cook Food',
            'submenu_url' => '/master_data/cook_food',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 1,
            'submenu_name' => 'Fashion',
            'submenu_url' => '/master_data/fashion',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 1,
            'submenu_name' => 'Fresh',
            'submenu_url' => '/master_data/fresh',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 1,
            'submenu_name' => 'Jenis Biaya',
            'submenu_url' => '/master_data/jenis_biaya',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 1,
            'submenu_name' => 'Produk',
            'submenu_url' => '/master_data/produk',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 1,
            'submenu_name' => 'Vendor',
            'submenu_url' => '/master_data/vendor',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 2,
            'submenu_name' => 'Pengajuan Objek',
            'submenu_url' => '/kelola_lokasi/pengajuan_objek',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 2,
            'submenu_name' => 'Data Objek',
            'submenu_url' => '/kelola_lokasi/data_objek',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 2,
            'submenu_name' => 'Data BAN',
            'submenu_url' => '/kelola_lokasi/data_ban',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 2,
            'submenu_name' => 'Biaya',
            'submenu_url' => '/kelola_lokasi/biaya',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 3,
            'submenu_name' => 'List',
            'submenu_url' => '/kelola_toko/list',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Submenu::create([
            'menu_id' => 3,
            'submenu_name' => 'Form',
            'submenu_url' => '/kelola_toko/form',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

    }
}
