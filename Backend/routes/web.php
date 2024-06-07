<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadionicaController;
use App\Http\Controllers\ListaPrijavaController;
use App\Http\Controllers\KorisnikPodatakController;
use App\Http\Controllers\PitanjaRadioniceController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(PitanjaRadioniceController::class)->group(function (){
    Route::get('/PitanjaRadionice', 'index');
    Route::post('/PitanjaRadionice', 'store');
    Route::get('/PitanjaRadionice/{id}', 'show');
    Route::delete('/PitanjaRadionice/{id}', 'destroy');
    Route::get('/SvaPitanja/{IdRadionice}', 'pitanja');
});


Route::controller(RadionicaController::class)->group(function (){
    Route::get('/Radionica', 'index');
    Route::post('/Radionica', 'store');
    Route::get('/Radionica/{id}', 'show');
    Route::delete('/Radionica/{id}', 'destroy');
});

Route::controller(ListaPrijavaController::class)->group(function (){
    Route::get('/ListaPrijava', 'index');
    Route::post('/ListaPrijava', 'store');
    Route::get('/ListaPrijava/{id}', 'show');
    Route::delete('/ListaPrijava/{id}', 'destroy');
    Route::get('/SvePrijave/{IdRadionice}', 'prijave');
});

Route::controller(KorisnikPodatakController::class)->group(function (){
    Route::get('/KorisnikPodatak', 'index');
    Route::post('/KorisnikPodatak', 'store');
    Route::get('/KorisnikPodatak/{id}', 'show');
    Route::delete('/KorisnikPodatak/{id}', 'destroy');
    Route::get('/SviPodaci/{IdRadionice}', 'podaci');
});