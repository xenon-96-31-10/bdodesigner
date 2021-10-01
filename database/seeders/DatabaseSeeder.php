<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(StatusSeeder::class);
        $this->call(TaxSeeder::class);
        $this->call(TransitoryMechanizmsSeeder::class);
        $this->call(WarehousesSeeder::class);
        $this->call(EquipmentsSeeder::class);
        $this->call(TypeOfProjectsSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(GroupsSeeder::class);
        $this->call(ProjectGroupsSeeder::class);
        $this->call(SecurityPostSeeder::class);
        $this->call(EntersOfSecurityPostSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ActivitisSeeder::class);
    }
}
