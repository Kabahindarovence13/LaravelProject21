<?php

use Illuminate\Database\Seeder;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       \App\Pizza::insert(
            [
                [
                    'type'=>'Red Baron',
                    'base'=>'thin & crust',
                    'name'=>'Red Baron thin crust pizza',
                    'price'=>'50000',
                    'image'=>'./images/red baron.jpg'
                ],
                [
                    'type'=>'flatbread',
                    'base'=>'cheesy',
                    'name'=>'pizza flatbread cheese',
                    'price'=>'40000',
                    'image'=>'./images/flatbread.jpg'
                ],
                [
                    'type'=>'cornmeal',
                    'base'=>'crust',
                    'name'=>'cornmeal pizza crust',
                    'price'=>'37000',
                    'image'=>'./images/cornmeal.jpg'
                ],
                [
                    'type'=>'stuffed crust',
                    'base'=>'hot dog',
                    'name'=>'stuffed crust hotdog pizza',
                    'price'=>'32000',
                    'image'=>'./images/hot dog.jpg'
                ],
                [
                    'type'=>'chicken',
                    'base'=>'hot',
                    'name'=>'Yummy Chicken Pizza',
                    'price'=>'30000',
                    'image'=>'./images/chicken.jpg'
                ],
                [
                    'type'=>'Gluten-cauliflower',
                    'base'=>'free',
                    'name'=>'Gluten-free-cauliflower pizza',
                    'price'=>'29500',
                    'image'=>'./images/gluten.jpg'
                ],
                [
                    'type'=>'chicken',
                    'base'=>'Homemade',
                    'name'=>'Homemade BBQ chicken pizza',
                    'price'=>'27500',
                    'image'=>'./images/homemade.jpg'
                ],
                [
                    'type'=>'pepperoni',
                    'base'=>'ham',
                    'name'=>'Hamy',
                    'price'=>'25000',
                    'image'=>'./images/pepperoni.jpg'
                ],
                [
                    'type'=>'Margherita',
                    'base'=>'Classic',
                    'name'=>'Pizza Margherita',
                    'price'=>'17500',
                    'image'=>'./images/magherita.jpg'
                ],
                [
                    'type'=>'Cauliflower',
                    'base'=>'Crust',
                    'name'=>'Cauliflower crust pizza',
                    'price'=>'15000',
                    'image'=>'./images/cauliflower.jpg'
                ]
            ] 
        ); 
       
    }
}
