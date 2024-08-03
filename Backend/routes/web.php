<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadionicaController;
use App\Http\Controllers\ListaPrijavaController;
use App\Http\Controllers\KorisnikPodatakController;
use App\Http\Controllers\PitanjaRadioniceController;

Route::get('/', function () {
    return view('welcome');
});

// Dodavanje sesije u rutu
Route::get('/set-session', function () {
    session(['key' => 'value']);
    return 'Session set';
});

Route::get('/get-session', function () {
    $value = session('key', 'default_value'); // 'default_value' je podrazumevana vrednost ako sesija nije postavljena
    return 'Session value: ' . $value;
});

Route::get('/last-viewed', function () {
    return 'Last viewed route: ' . session('last_viewed', 'None');
});

Route::controller(PitanjaRadioniceController::class)->group(function () {
    Route::get('/pitanjaRadionice', function () {
        session(['last_viewed' => 'PitanjaRadionice']);
        return app()->call('App\Http\Controllers\PitanjaRadioniceController@index');
    });
    Route::post('/pitanjaRadionice', 'store');
    Route::get('/pitanjaRadionice/{id}', 'show');
    Route::delete('/pitanjaRadionice/{id}', 'destroy');
    Route::get('/SvaPitanja/{IdRadionice}', 'pitanja');
});

Route::controller(RadionicaController::class)->group(function () {
    Route::get('/Radionica', function () {
        session(['last_viewed' => 'Radionica']);
        return app()->call('App\Http\Controllers\RadionicaController@index');
    });
    Route::post('/Radionica', 'store');
    Route::get('/Radionica/{id}', 'show');
    Route::delete('/Radionica/{id}', 'destroy');
});

Route::controller(ListaPrijavaController::class)->group(function () {
    Route::get('/ListaPrijava', function () {
        session(['last_viewed' => 'ListaPrijava']);
        return app()->call('App\Http\Controllers\ListaPrijavaController@index');
    });
    Route::post('/ListaPrijava', 'store');
    Route::get('/ListaPrijava/{id}', 'show');
    Route::delete('/ListaPrijava/{id}', 'destroy');
    Route::get('/SvePrijave/{IdRadionice}', 'prijave');
});

Route::controller(KorisnikPodatakController::class)->group(function () {
    Route::get('/KorisnikPodatak', function () {
        session(['last_viewed' => 'KorisnikPodatak']);
        return app()->call('App\Http\Controllers\KorisnikPodatakController@index');
    });
    Route::post('/KorisnikPodatak', 'store');
    Route::get('/KorisnikPodatak/{id}', 'show');
    Route::delete('/KorisnikPodatak/{id}', 'destroy');
    Route::get('/SviPodaci/{IdRadionice}', 'podaci');
});
