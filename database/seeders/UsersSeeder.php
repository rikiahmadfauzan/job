<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nik' => '320',
                'name' => 'Alex',
                'email' => 'alex@gmail.com',
                'password' => bcrypt('alex'),
                'role' => 'admin'


            ]
        ];
        foreach ($users as $key => $val){
            User::create($val);
        }
    }
}
