<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pokedex' , function(){
    $trainer = 'Michele';
    $pokemons = [
        ['name' => 'pikachu', 'type' => 'elettro'],
        ['name' => 'charmander', 'type' => 'fuoco'],
        ['name' => 'sceptile', 'type'=> 'erba'],
        ['name' => 'umbreon', 'type' => 'buio'],
    ];
    return view('pokedex' , ['trainer' => $trainer , 'pokemons' => $pokemons]);
});


Route::get('/team', function(){
    $mister = 'Mourinho';
    $players = [
        ['name' => 'Sergio Ramos', 'nation' => 'Spagnolo'],
        ['name' => 'C.Ronaldo', 'nation' => 'Portoghese'],
        ['name' => 'Benzema', 'nation' => 'Francese'],
        ['name' => 'Xabi Alonso', 'nation' => 'Spagnolo'],
    ];
    return view('team', ['mister'=>$mister , 'players'=>$players]);
});