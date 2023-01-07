<?php

namespace App\Http\Controllers;
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
Route::get('/', [HomeController::class, 'index']);

// select
Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/filmes', [FilmesController::class, 'index']);

// insert & delete 
Route::post('/clientes', [ClientesController::class, 'cadastrarCliente']);
Route::get('{id}', [ClientesController::class, 'apagarCliente']);

// insert & update
Route::post('/filmes', [FilmesController::class, 'cadastrarLocacao']);