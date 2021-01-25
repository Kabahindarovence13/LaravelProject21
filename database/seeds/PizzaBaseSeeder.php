<?php

use Illuminate\Database\Seeder;

class PizzaBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $p_base=new \App\PizzaBase();
        $p_base->base='Cheesy crust';
        $p_base->save();

        $p_base=new \App\PizzaBase();
        $p_base->base='Thin and crispy';
        $p_base->save();

        $p_base=new \App\PizzaBase();
        $p_base->base='Hot';
        $p_base->save();
    }
}
