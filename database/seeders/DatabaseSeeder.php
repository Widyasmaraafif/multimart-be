<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    $this->call([
        AdminSeeder::class,
        CompanyInfoSeeder::class,
        DistrictSeeder::class,
        DivisionSeeder::class,
        RolesSeeder::class,
    ]);
}

}
