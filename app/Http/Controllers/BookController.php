<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    public function booksList(){
        $books = Http::get("https://potterapi-fedeperin.vercel.app/it/books")->json();
        return view('books',compact('books'));
    }
    public function bookDetail($index){
        $books = Http::get("https://potterapi-fedeperin.vercel.app/it/books")->json();
        foreach ($books as $book){
            if($book['index'] == $index){
                return view('bookDetail',compact('book'));
            }
        }
    }
}
