<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'access_role_list' => 'emt077,h1,1,2,h2,3,4,h3,5,6,7,8,h4,9,h5,10,11,h6,12,13,h7,14,h8,15,16,17,18,19,20,21,h9,22,23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
