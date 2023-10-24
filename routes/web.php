<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Aula 08 - Introdução a rotas
Route::get('/empresa', function() {
    return view('site/empresa');
});

// Aula 09 - Rotas Any e Match
Route::any('/any', function() {
    return "Permite todos os tipos de acesso http (put, delete, get, post)";
});

Route::match(['get', 'post'], '/match', function() {
    return "Permite apenas acessos definidos";
});

// Aula 10 - Passagem de parâmetros

// /produto/123
Route::get('/produto/{id}', function($id) {
    return "O ID do produto é: " . $id;
});

// Aula 11 - Redirecionamento
Route::get('/sobre', function() {
    return redirect('/empresa');
});

// Aula 13 - Grupos de rotas

Route::prefix('admin')->group(function() {
    Route::get('dashboard', function() {
        return 'dashboard';
    });
    Route::get('users', function() {
        return 'users';
    });
    Route::get('clients', function() {
        return 'clients';
    });
});