<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pokemon;

class pokemonController extends Controller
{
    public function index (){
        $page_title = "Super heroes";
        $pokemon = pokemon::all();
        return view ('pokemon', compact('page_title', 'pokemon'));
       }
    

}
