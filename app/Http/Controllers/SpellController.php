<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SpellController extends Controller
{
    public function spellList(){
        $spells = Http::get("https://potterapi-fedeperin.vercel.app/it/spells")->json();
        return view("spells",compact("spells"));
    }
}
