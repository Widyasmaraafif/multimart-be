<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyInfo;

class CompanyInfoSeeder extends Seeder
{
    public function run()
    {
        CompanyInfo::create([
            'name' => 'Multimart E-Commerce',
            'email' => 'info@multimart.com',
            'phone' => '123456789',
            'company_logo' => 'logo.png',
            'facebook_link' => 'https://facebook.com/multimart',
            'youtube_link' => 'https://youtube.com/multimart',
            'twitter_link' => 'https://twitter.com/multimart',
            'company_address' => 'Jl. Contoh No. 123, Jakarta',
            'about_us' => 'Kami adalah platform e-commerce terbaik.',
            'refund_policy' => 'Kebijakan pengembalian barang berlaku 30 hari.',
            'privacy_policy' => 'Kami melindungi privasi Anda.',
            'shipping_policy' => 'Pengiriman dilakukan dalam 3-5 hari kerja.',
            'terms_condition' => 'Syarat & Ketentuan berlaku.',
            'created_by' => 1, // Sesuaikan dengan ID admin yang ada
        ]);
    }
}
