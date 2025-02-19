<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RolesEnum;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'User One',
            'email' => 'user_one@example.com',
        ])->assignRole(RolesEnum::User->value);

        User::factory()->create([
            'name' => 'Vendor One',
            'email' => 'vendor_one@example.com',
        ])->assignRole(RolesEnum::Vendor->value);

        User::factory()->create([
            'name' => 'Admin One',
            'email' => 'admin@example.com',
        ])->assignRole(RolesEnum::Admin->value);
    }
}
