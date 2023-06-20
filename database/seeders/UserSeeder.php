<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'Srun',
            'email' => 'mengsrun448@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mony',
            'email' => 'mony@gmail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}

