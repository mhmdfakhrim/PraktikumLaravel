<?php

namespace Database\Seeders;

use illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20; $i++){
        //insert data ke table mahasiswa
        Mahasiswa::create([
            'nama' => 'Joni',
            'nim' => '2019842182',
            'alamat' => 'Jl. Panglateh'

        ]);
    }
}
}
