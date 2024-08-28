<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::insert([
            ['name' => 'John Doe', 'fk_department' => 1, 'fk_designation' => 1, 'phone_number' => '1234567890', 'created_at' => now()],
            ['name' => 'Tommy Mark', 'fk_department' => 2, 'fk_designation' => 2, 'phone_number' => '0987654321', 'created_at' => now()],
            
        ]);
    }
}
