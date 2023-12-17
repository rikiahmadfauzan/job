<?php

namespace Database\Seeders;

use App\Models\Posisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posisi = [
            // [
            //     'nama_posisi' => '320',
            //     'deskripsi' => 'Alex',
            //     'gaji' => 'alex@gmail.com',
            //     'lokasi' => bcrypt('alex')


            // ],
            [
                'nama_posisi' => 'Operator',
                'deskripsi' => 'Sebgai operator mesin di bagian mesin sortir',
                'gaji' => '5.000.000 - 7.000.000',
                'lokasi' => 'Garut'

            ],

        ];
        foreach ($posisi as $key => $val){
            Posisi::create($val);
        }
    }
}
