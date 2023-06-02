<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController_old;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PokecardController;
use App\Http\Controllers\PokedexController;
use App\Http\Controllers\PokeforumController;

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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
	Route::get('/dashboard', function(){
		return 'wew';
	});
});


Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'pokemonSearch']);

// Route::post('/', [MainController::class, 'pokemonSearch']);
Route::get('/pokedex', [PokedexController::class, 'index'])->name('pokedexGet');
Route::get('/getonepokemon/{pokemonName}', [MainController::class, 'pokemonSearch']);
Route::get('/getpokemonnames', [PokedexController::class, 'getPokemonNames']);



// Route::get('/signin', [AuthController_old::class, 'signIn']);
// Route::get('/signincheck', [AuthController_old::class, 'signInCheck']);
// Route::get('/login', [AuthController_old::class, 'logIn']);







//about
Route::get('/about', [AboutController::class, 'index']);


//pokecard
Route::get('/pokecard', [PokecardController::class, 'index']);


//pokeforum
Route::get('/pokeforum', [PokeforumController::class, 'index']);
Route::post('/pokeforum', [PokeforumController::class, 'createThread']);
Route::get('/pokeforum/getforumlatest', [PokeforumController::class, 'getForumLatest']);
Route::get('/pokeforum/gettrendingtopics', [PokeforumController::class, 'getTrendingTopics']);
Route::get('/pokeforum/{slug}', [PokeforumController::class, 'thread']);




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
