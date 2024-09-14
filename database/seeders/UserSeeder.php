<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'rachelle kouakou',
            'email' => 'rachellekouakou@gmail.com',
            'télephone' => '+225 0711750966',
            'password' => 'password1234',
            'role' => Hash::make('admin'),
        ]);
        User::factory()->count(100);
    }
}
