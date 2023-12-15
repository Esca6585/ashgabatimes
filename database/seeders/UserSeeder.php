<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'email' => 'user'.'@gmail.com',
            ],
            [
                'name' => 'User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]
        );
    }
}
