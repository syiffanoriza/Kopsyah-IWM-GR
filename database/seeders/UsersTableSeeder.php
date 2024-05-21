<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array_map('str_getcsv', file(storage_path('app/csv/users.csv')));
        foreach ($users as $user) {
            DB::table('users')->insert([
                'user_id' => intval($user[1]),
                'name' => $user[2],
                'password' => Hash::make($user[3]),
                'role' => $user[4],
                'address' => $user[5],
            ]);
        }
    }
}
