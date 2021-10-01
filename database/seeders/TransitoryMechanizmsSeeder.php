<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransitoryMechanizm;
use App\Models\Tax;

class TransitoryMechanizmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tax1 = Tax::find(1);
        $tax2 = Tax::find(2);
        $tax3 = Tax::find(3);
        $tax4 = Tax::find(4);
        $tax5 = Tax::find(5);
        $tax6 = Tax::find(6);

        $m1 = new TransitoryMechanizm();
        $m1->model = 'Toyota';
        $m1->number = 'A101A77';
        $m1->color = 'Белый';
        $m1->name = 'Насос';
        $m1->tax()->associate($tax1)->save();

        $m2 = new TransitoryMechanizm();
        $m2->model = 'Toyota';
        $m2->number = 'A102A77';
        $m2->color = 'Белый';
        $m2->name = 'Манипулятор';
        $m2->tax()->associate($tax2)->save();

        $m3 = new TransitoryMechanizm();
        $m3->model = 'Toyota';
        $m3->number = 'A103A77';
        $m3->color = 'Белый';
        $m3->name = 'Миксер';
        $m3->tax()->associate($tax3)->save();

        $m4 = new TransitoryMechanizm();
        $m4->model = 'Mercedes';
        $m4->number = 'A104A77';
        $m4->color = 'Черный';
        $m4->name = 'Кран';
        $m4->tax()->associate($tax4)->save();

        $m5 = new TransitoryMechanizm();
        $m5->model = 'Toyota';
        $m5->number = 'A105A77';
        $m5->color = 'Черный';
        $m5->name = $tax5->type;
        $m5->tax()->associate($tax5)->save();

        $m6 = new TransitoryMechanizm();
        $m6->model = 'Toyota';
        $m6->number = 'A106A77';
        $m6->color = 'Белый';
        $m6->name = $tax6->type;
        $m6->tax()->associate($tax6)->save();

    }
}
