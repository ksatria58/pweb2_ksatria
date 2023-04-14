<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        User::create([
            'name' => 'ksatria',
            'level' => 'admin',
            'email' => 'satria@gmail.com',
            'password' => hash::make('satria'),
            // 'remember_token' => Str::random(60),
        ]);
    }
}