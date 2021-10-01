<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activiti;

class ActivitisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobit = new Activiti();
        $jobit->name = 'Работа по IT';
        $jobit->save();

        $jobelectro = new Activiti();
        $jobelectro->name = 'Электро Работы';
        $jobelectro->save();

        $jobwc = new Activiti();
        $jobwc->name = 'Сантехнические работы';
        $jobwc->save();

        $jobdesign = new Activiti();
        $jobdesign->name = 'Проектировка';
        $jobdesign->save();
    }
}
