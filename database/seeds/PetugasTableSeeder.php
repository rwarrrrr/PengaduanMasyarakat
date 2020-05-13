<?php

use Illuminate\Database\Seeder;

class PetugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Petugas::create([
            'id_petugas' => '1',
            'id_user' => '1',
            'nama_petugas' => 'admin',
            'username' => 'admin',
            'password'  => bcrypt('admin'),
            'telp' => 00000000000,
            'level' => 'admin'
        ]);
    }
}
