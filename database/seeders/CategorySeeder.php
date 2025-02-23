<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories =
            [
                [
                    'name' => 'Monitors',
                    'department_id' => 1,
                    'parent_id' => null,
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Smarthphone',
                    'department_id' => 1,
                    'parent_id' => null,
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Mens Cloth',
                    'department_id' => 2,
                    'parent_id' => null,
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Runing boot',
                    'department_id' => 5,
                    'parent_id' => null,
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ];
        DB::table('categories')->insert($categories);
    }
}
