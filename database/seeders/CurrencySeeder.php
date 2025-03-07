<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CurrencySeeder extends Seeder
{
    public function run()
    {
        DB::table('currencies')->insert([
            [
                'country_name' => 'United States',
                'currency_symbol' => '$',
                'par_dollar_rate' => 1.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'country_name' => 'European Union',
                'currency_symbol' => '€',
                'par_dollar_rate' => 1.10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'country_name' => 'United Kingdom',
                'currency_symbol' => '£',
                'par_dollar_rate' => 1.25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'country_name' => 'Japan',
                'currency_symbol' => '¥',
                'par_dollar_rate' => 150.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
