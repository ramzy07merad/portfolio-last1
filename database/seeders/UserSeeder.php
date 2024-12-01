<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Merad Ramzy',
            'email' => 'ramzi07merad@gmail.com',
            'password' => Hash::make('ramzi123456789'), // It's important to hash passwords
        ]);
    }
}
