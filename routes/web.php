<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('/', 'HomeController');
Route::resource('/home', 'HomeController');
Route::resource('/agenda', 'AgendaController');
Route::resource('/contact', 'ContactController');

Auth::routes();

//User and Admin acces
Route::middleware(['auth', 'isUser'])->group(function(){
    Route::resource('/afmelden', 'AfmeldController');
    Route::resource('/overzicht', 'OverzichtController');
});

//Admin acces only
Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::resource('/berichttoevoegen', 'BerichtToevoegen');
});
