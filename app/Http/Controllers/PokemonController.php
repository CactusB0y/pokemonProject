<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(){
        $pokemons = Pokemon::all();
        return view('welcome',compact('pokemons'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $store = new Pokemon;
        $store->nom = $request->nom;
        $store->type = $request->type;
        $store->niveau = $request->niveau;
        $store->save();
        dd($request->nom, $request->type, $request->niveau);
        // return redirect()->back();
    }
}
