<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Desa;
use App\Models\Unit;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Unit::create([
            'Nama' => 'Kecamatan Pulung',
            'email' => 'kecamatanpulung@gmail.com',
            'tipe' => 'kecamatan',
        ]);


        User::factory()->create([
            'name' => 'Admin Kecamatan',
            'email' => 'adminkecamatan@gmail.com',
            'role' => 'admin-kecamatan',
            'unit_id' => '1',
            'jabatan' => 'Kasubag Umum Dan Kepegawaian',
            'hp' => '082555444778'
        ]);


        User::factory()->create([
            'name' => 'Operator Kecamatan',
            'email' => 'kecamatan@gmail.com',
            'role' => 'operator-kecamatan',
            'unit_id' => '1',
            'jabatan' => 'Kasi Tata Pemerintahan',
            'hp' => '083555888777'
        ]);

        User::factory()->create([
            'name' => 'Admin Desa Banaran',
            'email' => 'admindesa@gmail.com',
            'role' => 'admin-desa',
            'unit_id' => '2',
            'jabatan' => 'Sekretaris Desa',
            'hp' => '089777888555'
        ]);

        User::factory()->create([
            'name' => 'Operator Desa Banaran',
            'email' => 'desa@gmail.com',
            'role' => 'operator-desa',
            'unit_id' => '2',
            'jabatan' => 'Kasi Pemerintahan Umum',
            'hp' => '082555444888'
        ]);



        $desa = array("Banaran", "Bedrug", "Bekiring", "Karangpatihan", "Kesugihan", "Munggung", "Patik", "Plunturan", "Pomahan", "Pulung", "Pulung Merdiko", "Serag", "Sidoharjo", "Singgahan", "Tegalrejo", "Wagirkidul", "Wayang", "Wotan");

        foreach ($desa as $d) {
            // Desa::create([
            //     'nama' => $d,
            // ]);
            Unit::create([
                'Nama' => $d,
                'email' => $d.'@gmail.com',
                'tipe' => 'desa',
            ]);
        }
    }
}
