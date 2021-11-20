<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::factory()->create(['email' => "test@test.com"]);
        $admin = \App\Models\User::factory()->create(['email' => "admin@test.com"]);
        $superadmin = \App\Models\User::factory()->create(['email' => "superadmin@test.com"]);

        $adminRole = Role::create(['name' => 'admin']);
        $superadminRole = Role::create(['name' => 'superadmin']);
        $admin->assignRole($adminRole);
        $superadmin->assignRole($superadminRole);
    }
}
