<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Designation::insert([
          
            ['name' => 'Marketing Manager', 'created_at' => now()],
            ['name' => 'Mobile Application Dev.', 'created_at' => now()],
          
        ]);
    }
}
