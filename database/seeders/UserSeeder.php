<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'milos',
            'email' => 'milos@mail.com',
            'password' => Hash::make('milos'),
            'active_from' => now(),
            'avatar' => '1.png',
            'role'=> Role::ADMIN->value
        ]);               
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'emil',
            'email' => 'emil@mail.com',
            'password' => Hash::make('emil'),
            'active_from' => now(),
            'avatar' => '2.png'
        ]);
    }
}
