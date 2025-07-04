<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Menu::create([
            'menu_name' => 'Master Data',
            'menu_url' => '/master_data',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Menu::create([
            'menu_name' => 'Kelola Lokasi',
            'menu_url' => '/kelola_lokasi',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Menu::create([
            'menu_name' => 'Kelola Toko',
            'menu_url' => '/kelola_toko',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

    }
}
