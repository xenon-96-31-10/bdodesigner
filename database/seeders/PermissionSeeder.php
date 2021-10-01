<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $create_users = new Permission();
      $create_users->name = 'Регистрировать пользователей';
      $create_users->slug = 'create-users';
      $create_users->save();

    }
}
