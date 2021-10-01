<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createUsers = Permission::where('slug','create-users')->first();
        $admin = new Role();
        $admin->name = 'Администратор';
        $admin->slug = 'admin';
        $admin->save();
        $admin->permissions()->attach($createUsers);

        $manager = new Role();
        $manager->name = 'Менеджер';
        $manager->slug = 'manager';
        $manager->save();

        $owner = new Role();
        $owner->name = 'Собственник';
        $owner->slug = 'owner';
        $owner->save();

        $family = new Role();
        $family->name = 'Член семьи';
        $family->slug = 'family';
        $family->save();

        $ownersguard = new Role();
        $ownersguard->name = 'Охранник территории/дома';
        $ownersguard->slug = 'ownersguard';
        $ownersguard->save();

        $owners_representative = new Role();
        $owners_representative->name = 'Представитель собственника';
        $owners_representative->slug = 'owners-rep';
        $owners_representative->save();

        $worker = new Role();
        $worker->name = 'Работник';
        $worker->slug = 'worker';
        $worker->save();

        $watcher = new Role();
        $watcher->name = 'Наблюдатель';
        $watcher->slug = 'watcher';
        $watcher->save();

        $executor = new Role();
        $executor->name = 'Исполнитель';
        $executor->slug = 'executor';
        $executor->save();

        $overseer = new Role();
        $overseer->name = 'Надзирающий';
        $overseer->slug = 'overseer';
        $overseer->save();

        $guard = new Role();
        $guard->name = 'Охранник';
        $guard->slug = 'guard';
        $guard->save();

        $guard_post = new Role();
        $guard_post->name = 'Охранник на посту';
        $guard_post->slug = 'guard-post';
        $guard_post->save();

        $dispatcher = new Role();
        $dispatcher->name = 'Диспетчер';
        $dispatcher->slug = 'dispatcher';
        $dispatcher->save();



    }
}
