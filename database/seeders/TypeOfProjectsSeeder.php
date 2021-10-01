<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeOfProject;

class TypeOfProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $kv = new TypeOfProject();
      $kv->name = 'Квартира';
      $kv->slug = 'apartment';
      $kv->save();

      $house = new TypeOfProject();
      $house->name = 'Дом';
      $house->slug = 'house';
      $house->save();
    }
}
