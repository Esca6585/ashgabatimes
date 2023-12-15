<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::firstOrCreate(
        [
            'email' => 'admin@gmail.com',
        ],
        [
            'name' => 'Admin',
            'surname' => 'Adminow',
            'password' => Hash::make('password'),
        ]);
    }
}
