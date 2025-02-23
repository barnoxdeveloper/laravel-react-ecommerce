<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deopartments =
            [
                [
                    'name' => 'Electronics',
                    'slug' => 'electronics',
                    'meta_title' => 'Electronics Department',
                    'meta_description' => 'Find the latest electronics including phones, laptops, and more.',
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Fashion',
                    'slug' => 'fashion',
                    'meta_title' => 'Fashion Department',
                    'meta_description' => 'Explore the latest trends in fashion and accessories.',
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Home Goods',
                    'slug' => 'home-goods',
                    'meta_title' => 'Home Goods Department',
                    'meta_description' => 'Quality home goods for every room in your house.',
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Beauty',
                    'slug' => 'beauty',
                    'meta_title' => 'Beauty Department',
                    'meta_description' => 'Discover beauty products and skincare essentials.',
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Sports',
                    'slug' => 'sports',
                    'meta_title' => 'Sports Department',
                    'meta_description' => 'Get the best sports gear and equipment.',
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ];
        DB::table('departments')->insert($deopartments);
    }
}
