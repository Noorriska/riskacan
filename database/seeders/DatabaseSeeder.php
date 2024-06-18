<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);

        prodi::factory(10)->create();


        Mahasiswa::create([
            'nim'=> 'E020322108',
            'nama'=> 'Riska',
            'no_hp'=> '089523233980',
            'alamat'=> 'Sungai Andai',
            'foto'=> '22,jpg',
            'password'=> '1234',
            'prodi_id'=> 1,
        ]);

        Mahasiswa::create([
            'nim'=> 'E020322107',
            'nama'=> 'Najwa',
            'no_hp'=> '081345678098',
            'alamat'=> 'Ratu jaleha',
            'foto'=> '11,jpg',
            'password'=> '123',
            'prodi_id'=> 2,
        ]);
        Mahasiswa::factory(100)->create();
    }
}
