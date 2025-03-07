<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ShippingCostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shipping_costs')->insert([
            [
                'division_id' => 1, // Sesuaikan dengan ID yang ada di tabel divisions
                'district_id' => 1, // Sesuaikan dengan ID yang ada di tabel districts
                'inside_price' => 5000,
                'outside_price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'division_id' => 2,
                'district_id' => 2,
                'inside_price' => 6000,
                'outside_price' => 12000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
