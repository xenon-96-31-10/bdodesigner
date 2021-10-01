<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SecurityPost;
use App\Models\ProjectGroup;

class SecurityPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_group = ProjectGroup::find(1);

        $post = new SecurityPost();
        $post->name = 'Пост охраны ЖК Огонек';
        $post->project_group()->associate($project_group)->save();

    }
}
