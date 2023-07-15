<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // \App\Models\User::factory(10)->create();

        // // \App\Models\User::factory()->create([
        // //     'name' => 'Test User',
        // //     'email' => 'test@example.com',
        // //     'password' => '$2y$10$WXyYfj2PdcMpcNy.r0HOiuv3dT7d1.xjrM1bhko0KcVdWQn.fQ6MW',
        // // ]);

        \App\Models\Formprofile::insert([
            'name' => "raul",
            'last_name' => "rodriguez",
            'nationality' => "mexico",
            'date_of_birth' => "1990-07-12",
            'height' => "170",
            'weight' => "85",
            'eyes_color' => "castaño",
            'hair_color' => "castaño oscuro",
            'additional_info' => "tatoo",
            'artistic_skills' => "danza",
            'profile_media' => "url",
        ]);
    }
}
