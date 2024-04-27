<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrator = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '08977161661',
            'password' => bcrypt('password')
        ]);
    }
}
