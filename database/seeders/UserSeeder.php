<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'FERNANDO 2',
            'email' => 'fer@GMAIL.com',
            'password' => Hash::make('1234'),
        ]);

        // Agrega más usuarios si es necesario
        User::create([
            'name' => 'Jane Smith',
            'email' => 'MAJO@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
