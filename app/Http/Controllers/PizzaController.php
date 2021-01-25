<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\PizzaType;

use Illuminate\Http\Request;

class PizzaController extends Controller
{


    //for /pizzas route 1st action
    public function index()
    {
        $pizzas = pizza::all();
        return view('pizzas', ['pizzas' => $pizzas]);
        //get data from the database

        //return view('pizzas', [
         //   'pizzas' => $pizzas
        //]);
    }

// /pizzas/form 2nd action
    public function form()
    {
        //pizza type
        $Pizzas=PizzaType::all();
        return view('form')->with(['pizzas'=>$Pizzas]);
      //pizza base
       // $Pizzas=PizzaBaseSeeder::all();
       // return view('form')->with(['pizzas'=>$Pizzas]);
    }


    public function displayThankYou()
    {

        return view('thankYou');
    }
    public function saveForm(Request $request){
        $pizza = new Pizza();
        $pizza->type=$request->get('type');
        $pizza->base=$request->get('base');
        $pizza->name=$request->get('name');
        $pizza->save();
        return view('thankYou');
    }
//public function show($id){
//    return view('details', ['id'=>$id]);
//}
}

