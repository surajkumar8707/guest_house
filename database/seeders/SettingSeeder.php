<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Guest House',
            'email' => 'daarukavaneecoresort@gmail.com',
            'whatsapp' => '+91 6396021235',
            'contact' => '+91 6396021235',
            'address' => 'Behind aartola parking Aartola jageshwar road Aartola, Tehsil bhanoli District almora',
            'header_image' => "assets/front/images/header/header.png",
            'is_fresh' => 1,
        ]);
    }
}
