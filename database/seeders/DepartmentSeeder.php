<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Department::insert([
           
            ['name' => 'Sales and marketing', 'created_at' => now()],
            ['name' => 'Application development', 'created_at' => now()],
        ]);
    }
}
