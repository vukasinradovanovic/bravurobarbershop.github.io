<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/{locale}', function($locale) {
    if (!in_array($locale, ['en', 'rs'])) {
        abort(400);
    }
    App::setLocale($locale);

    return view('home');
})->name('home');

Route::get('/{locale}/istorijat', function ($locale) {
    if (!in_array($locale, ['en', 'rs'])) {
        abort(400);
    }
    App::setLocale($locale);

    return view('istorijat');
})->name('istorijat');

Route::get('/{locale}/kontakt', function ($locale) {
    if (!in_array($locale, ['en', 'rs'])) {
        abort(400);
    }
    App::setLocale($locale);

    return view('kontakt');
})->name('kontakt');

Route::get('/{locale}/autor', function ($locale) {
    if (!in_array($locale, ['en', 'rs'])) {
        abort(400);
    }
    App::setLocale($locale);

    return view('autor');
})->name('autor');

// Ruta za lokaciju stranicu
Route::get('/{locale}/lokacija', function ($locale) {
    if (!in_array($locale, ['en', 'rs'])) {
        abort(400); // Prekidamo izvršenje sa statusom 400 ako nije validan jezik
    }
    App::setLocale($locale); // Postavljamo jezik aplikacije

    return view('kontakt'); // Vraćamo view 'lokacija'
})->name('lokacija'); // Dajemo imenu ruti 'lokacija'