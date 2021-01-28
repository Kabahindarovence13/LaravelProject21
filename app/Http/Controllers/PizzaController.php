<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\PizzaType;
use App\PizzaBase;

use Illuminate\Http\Request;

class PizzaController extends Controller
{


    //for /pizzas route 1st action
    public function index()
    {
        $pizzas = pizza::all();
        return view('pizzas', ['pizzas' => $pizzas]);
    }

// /pizzas/form 2nd action
    public function form(\App\Pizza $pizza)
    {
    
        return view('form')
        ->with(
            [
            'pizza'=>$pizza
            ]
        );

     
    }
    
    
    public function displayThankYou()
    {

        return view('thankYou');
    }
    public function saveForm(Request $request){
        $pizza = new \App\PizzaOrder();
        $pizza->name=$request->get('name');
        $pizza->pizza_id=$request->get('pizza_id');
        $pizza->save();
        return view('thankYou');
    }
//public function show($id){
//    return view('details', ['id'=>$id]);
//}
}

