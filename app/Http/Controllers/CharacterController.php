<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public function charactersList(){
        $characters = Http::get('https://potterapi-fedeperin.vercel.app/it/characters')->json();
        return view('characters',compact('characters'));
    }
    public function characterDetail($index){
        $characters = Http::get('https://potterapi-fedeperin.vercel.app/it/characters')->json();
        foreach ($characters as $character){
            if($character['index'] == $index){
                return view('characterDetail',compact('character'));
            }
        }
    }
}
