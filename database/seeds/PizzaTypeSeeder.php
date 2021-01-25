<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('pizza_types')->insert([
//            'name' => 'Chicken'
//        ]);

        $p_type=new \App\PizzaType();
        $p_type->name='Chicken';
       $p_type->save();

        $p_type=new \App\PizzaType();
        $p_type->name='Italian';
        $p_type->save();

        $p_type=new \App\PizzaType();
        $p_type->name='Hawaiian';
        $p_type->save();
    }
}
