<?php

use App\Dessert;
use Illuminate\Database\Seeder;

class DessertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dessert::class,10)->create();
    }
}
