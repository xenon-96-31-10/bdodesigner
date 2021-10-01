<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnterOfSecurityPost;
use App\Models\SecurityPost;

class EntersOfSecurityPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = SecurityPost::find(1);

        $enter1 = new EnterOfSecurityPost();
        $enter1->name = 'КПП 1';
        $enter1->security_post()->associate($post)->save();

        $enter2 = new EnterOfSecurityPost();
        $enter2->name = 'КПП 2';
        $enter2->security_post()->associate($post)->save();

        $enter3 = new EnterOfSecurityPost();
        $enter3->name = 'КПП 3';
        $enter3->security_post()->associate($post)->save();
    }
}
