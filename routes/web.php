<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SpellController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CharacterController;

Route::get('/', [PublicController::class,'homepage'])->name('welcome');
Route::get('/personaggi', [CharacterController::class,'charactersList'])->name('characters');
Route::get('/personaggi/dettaglio/{index}', [CharacterController::class,'characterDetail'])->name('character.detail');
Route::get('/libri', [BookController::class,'booksList'])->name('books');
Route::get('/libri/dettaglio/{index}', [BookController::class,'bookDetail'])->name('book.detail');
Route::get('/incantesimi', [SpellController::class, 'spellList'])->name('spells');
Route::get('/contattaci', [ContactController::class,'contactUs'])->name('contact.us');
Route::post('/contattaci-submit', [ContactController::class,'contactUsSubmit'])->name('contact.submit');
