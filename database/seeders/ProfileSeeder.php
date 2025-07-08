<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'profile_name' => 'SUPERADMIN',
            'tipe_profile' => 'legal',
            'description' => 'SUPERADMIN HO YC',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Profile::create([
            'profile_name' => 'ADMIN',
            'tipe_profile' => 'legal',
            'description' => 'ADMIN HO YC',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
