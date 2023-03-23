<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\table_pokemon;

class table_pokemonController extends Controller
{
    public function index (){
        $page_title = "Super heroes";
        $pokemon = table_pokemon::all();
        return view ('pokemon', compact('page_title', 'pokemon'));
       }
}
