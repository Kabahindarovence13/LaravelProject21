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
        $p_base->name='Cheesy crust';
        $p_base->save();

        $p_base=new \App\PizzaBase();
        $p_base->name='Thin and crispy';
        $p_base->save();

        $p_base=new \App\PizzaBase();
        $p_base->name='Hot';
        $p_base->save();
    }
}
