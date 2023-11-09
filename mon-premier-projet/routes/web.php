<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['titre' => 'Bonjour et bienvenue dans la decouverte de Laravel ! ']);
});


Route::get('/ping', function () {
    return "pong";
});

Route::get('/ping', function () {
    return view('ping', ['titre' => 'Bonjour et bienvenue dans la decouverte de Laravel ! ']);
});

Route::get('/ping', [PingPongControleur::class, 'ping']);
Route::get('/ping', [PingPongControleur::class, 'pong']);