<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//1st route
Route::get('/pizzas','PizzaController@index' );
//2nd route
Route::get('/pizzas/form/{pizza}', 'PizzaController@form')->name('order');

Route::post('/pizzas/form', 'PizzaController@saveForm')->name('save-form');


//3rd route
//Route::get('/pizzas/{id}', function($id){
  //  return view('details',['id'=>$id]);
//});
Route::post('thankYou','PizzaController@displayThankYou')->name('thankYou');

