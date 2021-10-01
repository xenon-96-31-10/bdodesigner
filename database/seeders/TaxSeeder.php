<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tax;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spec1 = new Tax();
        $spec1->type = 'Спецтехника';
        $spec1->weight = 'до 1,5 т';
        $spec1->price = 0;
        $spec1->save();

        $spec2 = new Tax();
        $spec2->type = 'Спецтехника';
        $spec2->weight = 'от 1,5 т до 3 т';
        $spec2->price = 500;
        $spec2->save();

        $spec3 = new Tax();
        $spec3->type = 'Спецтехника';
        $spec3->weight = 'от 3 т до 7 т';
        $spec3->price = 600;
        $spec3->save();

        $spec4 = new Tax();
        $spec4->type = 'Спецтехника';
        $spec4->weight = 'свыше 7 т';
        $spec4->price = 800;
        $spec4->save();

        $gruz = new Tax();
        $gruz->type = 'Грузовой';
        $gruz->weight = 'Без ранжирования';
        $gruz->price = 300;
        $gruz->save();

        $dlinomer = new Tax();
        $dlinomer->type = 'Длинномер/Еврофура';
        $dlinomer->weight = 'Без ранжирования';
        $dlinomer->price = 900;
        $dlinomer->save();

    }
}
