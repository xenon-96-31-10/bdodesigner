<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectGroup;

class ProjectGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new ProjectGroup();
        $group->name = 'ЖК Огонек';
        $group->save();
    }
}
