<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Insert your data here using the DB facade
        // For example:
        DB::table('test_table')->insert([
            'first_name' => 'test user',
            'last_name' => 'test@example.com,',
            'password' => Hash::make('password'),
        ]);
    }
}
