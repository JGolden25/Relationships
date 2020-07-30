<?php

use Illuminate\Support\Facades\Route;
use App\Entree;
use App\Ingredients;
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

Route::get('/', function () {

    // dd();

    $entrees = ['Mac & Cheese', 'Steak', 'Pork'];

    foreach ($entrees as $entree) {

        Entree::create([
            'name' => $entree

        ]);
    }

    $ingredient = Ingredients::create([
        'name'  =>  'Macaroni',
        'description' => 'savory mac & cheese',
        'id' => 1
    ]);

    // $entrees = Entree::find([2,3]); // Modren Chairs, Home Chairs
    // $ingredient->entrees()->attach($entrees);

    return view('welcome');
});
