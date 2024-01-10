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








Route::get('/' , function(){
    return view('welcome');
})->name('home');

Route::get('/music', function(){
    $musics = [
        [
            'title' => 'DVLA',
            'descrizione' => 'album rap',
            'img' => '/img/DVLA.jpg'
        ],
        [
            'title' => 'after hours',
            'descrizione' => 'album pop',
            'img' => '/img/afterhours.jpg'
        ]
    ];
    return view('music' , ['musics'=>$musics]);
})->name('music');


Route::get('/film', function(){
    $films = [
        [
            'title' => 'è stata la mano di dio',
            'descrizione' => 'film italiano',
            'img' => '/img/filmscorsese.jpg'
        ],
        [
            'title' => 'the irish man',
            'descrizione' => 'film americano',
            'img' => '/img/filmsorrentino.jpg'
        ]
    ];
    return view('film' , ['films'=>$films]);
})->name('film');
