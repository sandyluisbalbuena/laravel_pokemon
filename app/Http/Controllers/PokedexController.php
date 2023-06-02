<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $pokemonName)
    {
        if($pokemonName['pokemonName'] == null || $pokemonName['pokemonName'] == ""){
            $pokemonName['pokemonName'] ='pikachu';
        }
        $mainController = new MainController();
        $pokemonData = $mainController->pokemonSearch($pokemonName['pokemonName']);
        // dd($pokemonData);
        return view('pages.pokedex', compact('pokemonData'));
    }   


    public function getPokemonNames(){
        $pokemonNames = Pokemon::all();
        $pokemonNames = $pokemonNames->pluck('pokemonName');
        $pokemonNamesArray = $pokemonNames->toArray();

        return $pokemonNamesArray;
    }
}