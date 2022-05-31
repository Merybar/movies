<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware (['auth'])->name('dashboard');


Route::get('/movie', function(){
    return view('movie');
});

Route::post('/movies', function(Request $request){
    $search = $request->input('movie');
    $movies = Http::get('http://www.omdbapi.com/?apikey=52ae5c83&s='.$search);
    $movies = json_decode($movies);
    return view('movie', compact('movies'));
});



//require_DIR_.'/auth.php';

