<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnum;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # Create "Administrator" user
        \App\Models\User::factory()
            ->withRole(UserRoleEnum::ADMIN->value)
            ->create([
                'fullname' => 'Super Admin',
                'email' => 'admin@humma-esport.com',
            ]);

        # Create "Event Organizer" user
        \App\Models\User::factory(10)
            ->withRole(UserRoleEnum::EO->value)
            ->create();

        # Create "Member" user
        \App\Models\User::factory(10)
            ->withRole(UserRoleEnum::USER->value)
            ->create();
    }
}
