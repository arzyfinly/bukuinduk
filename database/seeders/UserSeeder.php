<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('tuadministrator'),
            'role'      => 1,
        ]);

        User::create([
            'name'      => 'guru',
            'email'     => 'guru@gmail.com',
            'password'  => Hash::make('12345678'),
            'role'      => 2,
        ]);
    }
}
