<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            array(
                'name'      => 'Admin',
                'user_id'   => 12312345,
                'password'  => Hash::make("12345678"),
                'role'      => 'admin'
            ),
            array(
                'name'      => 'Asep Gunawan',
                'user_id'   => 32132145,
                'password'  => Hash::make("User12345"),
                'role'      => null
            )
        ));
    }
}
