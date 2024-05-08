<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnum;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = collect(UserRoleEnum::cases())->pluck('value');

        $roles->each(function($item) {
            Role::create([
                'name' => $item
            ]);
        });
    }
}
