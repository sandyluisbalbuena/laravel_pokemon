<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{   
    function pokemonSearch($pokemonName)
    {
        // $pokemonDouble_damage_from = [];
        // $pokemonDouble_damage_to = [];
        // $pokemonHalf_damage_from = [];
        // $pokemonHalf_damage_to = [];
        // $pokemonNo_damage_from = [];
        // $pokemonNo_damage_to = [];

        $urlPokemonSearch = "https://pokeapi.co/api/v2/pokemon/";
        $response = Http::get($urlPokemonSearch.$pokemonName);
        // $response2 = Http::get($response->object()->species->url);
        foreach($response->object()->abilities as $ability){
            $pokemonAbilites[]=[ucfirst($ability->ability->name),$ability->ability->url,$ability->is_hidden];
        }
        foreach($response->object()->stats as $stat){
            $pokemonStats[]=[$stat->stat->name,$stat->base_stat];
        }
        foreach($response->object()->types as $type){
            $pokemonTypes[]=[$type->type->name,$type->type->url];
        //     $response3 = Http::get($type->type->url);
        //     foreach($response3->object()->damage_relations->double_damage_from as $ddf){
        //         $pokemonDouble_damage_from[] = $ddf->name;
        //     }
        //     foreach($response3->object()->damage_relations->double_damage_to as $ddf){
        //         $pokemonDouble_damage_to[] = $ddf->name;
        //     }
            // foreach($response3->object()->damage_relations->half_damage_from as $ddf){
            //     $pokemonHalf_damage_from[] = $ddf->name;
            // }
            // foreach($response3->object()->damage_relations->half_damage_to as $ddf){
            //     $pokemonHalf_damage_to[] = $ddf->name;
            // }
        //     foreach($response3->object()->damage_relations->no_damage_from as $ddf){
        //         $pokemonNo_damage_from[] = $ddf->name;
        //     }
        //     foreach($response3->object()->damage_relations->no_damage_to as $ddf){
        //         $pokemonNo_damage_to[] = $ddf->name;
        //     }
        }

        // $pokemonDouble_damage_from = array_values(array_unique($pokemonDouble_damage_from));
        // $pokemonDouble_damage_to = array_values(array_unique($pokemonDouble_damage_to));
        // $pokemonNo_damage_from = array_values(array_unique($pokemonNo_damage_from));
        // $pokemonNo_damage_to = array_values(array_unique($pokemonNo_damage_to));

        // $pokemonDouble_damage_from_new = array_diff($pokemonDouble_damage_from,$pokemonDouble_damage_to);
        // $pokemonDouble_damage_to_new = array_diff($pokemonDouble_damage_to,$pokemonDouble_damage_from);
        // dd($pokemonDouble_damage_from, $pokemonDouble_damage_to, $pokemonNo_damage_from, $pokemonNo_damage_to);


        // foreach($response2->object()->flavor_text_entries as $flavor_text_entry){
        //     if($flavor_text_entry->language->name == 'en'){
        //         $flavor_text = $flavor_text_entry->flavor_text;
        //     }
        // }

        $id = str_pad($response->object()->id, 3, "0", STR_PAD_LEFT);

        // foreach($response->object()->moves as $move){
        //     $response2 = Http::get($move->move->url);
        //     dd($response2->object());
        //     $flavorText='';
        //     foreach($response2['flavor_text_entries'] as $flavor_text_entry){
        //         // dd($flavor_text_entry);
        //         if($flavor_text_entry['language']['name'] == 'en'){
        //             $flavorText = $flavor_text_entry['flavor_text'];
        //             return;
        //         }
        //     }
            // $pokemonMove['name']=$move->move->name;
            // $pokemonMove['accuracy']=$response2['accuracy'];
            // $pokemonMove['damageClass']=$response2['damage_class']['name'];
            // $pokemonMove['flavorText']=$flavorText;
            // $pokemonMove['id']=$response2['id'];
            // $pokemonMove['power']=$response2['power'];
            // $pokemonMove['pp']=$response2['pp'];
            // $pokemonMove['type']=$response2['type']['name'];
            // $pokemonMove['target']=$response2['target']['name'];
            // $pokemonMoves['id']=$response2['id'];
            // dd($pokemonMoves);
            // echo '|';
        //     $pokemonMoves[]=$pokemonMove;
        // }
        // $moveLimit = 20;

        $moveLimit = count($response->object()->moves);
        $limitedMoves = array_slice($response->object()->moves, 0, $moveLimit);
        $pokemonUtiliesData['pokemonAbilities']=$pokemonAbilites;
        $pokemonUtiliesData['pokemonHeight']=$response->object()->height;
        $pokemonUtiliesData['pokemonId']=$id;
        $pokemonUtiliesData['pokemonName']=ucfirst($response->object()->name);
        $pokemonUtiliesData['pokemonStats']=$pokemonStats;
        $pokemonUtiliesData['pokemonTypes']=$pokemonTypes;
        $pokemonUtiliesData['pokemonWeight']=$response->object()->weight;
        $pokemonUtiliesData['pokemonHeight']=$response->object()->height;
        $pokemonUtiliesData['pokemonMoves']=$limitedMoves;
        $pokemonUtiliesData['pokemonSpecies']=$response->object()->species->url;
        // $pokemonUtiliesData['pokemonFlavor_text_entries']=$flavor_text;
        // $pokemonUtiliesData['pokemonHabitat']=$response2->object()->habitat;
        // $pokemonUtiliesData['pokemonEvolution_chain']=$response2->object()->evolution_chain->url;
        // $pokemonUtiliesData['pokemonDouble_damage_from']=$pokemonDouble_damage_from_new;
        // $pokemonUtiliesData['pokemonDouble_damage_to']=$pokemonDouble_damage_to;
        // $pokemonUtiliesData['pokemonNo_damage_from']=$pokemonNo_damage_from;
        // $pokemonUtiliesData['pokemonNo_damage_to']=$pokemonNo_damage_to;
        // dd($pokemonUtiliesData);
        return $pokemonUtiliesData;
    }

    function getPokemonNameAndId(){
        $urlPokemonSearch = "https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0";
        $response = Http::get($urlPokemonSearch);
        
        // dd($response->object());

        foreach($response->object()->results as $pokemonData){

            // dd($pokemonData->name);
            $response2 = Http::get($pokemonData->url);
            // dd($response2->object()->name);

            $pokemon = new Pokemon();
            $pokemon->pokemonName = $response2->object()->name;
            $pokemon->pokemonId = $response2->object()->id;
            $pokemon->save();

            echo '|';

        }
    }
}
