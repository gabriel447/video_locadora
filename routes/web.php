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

// get
Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/filmes', [FilmesController::class, 'index']);
Route::get('/locar', [LocarController::class, 'index']);
Route::get('/devolver', [DevolverController::class, 'index']);

// post
Route::post('/clientes', [ClientesController::class, 'cadastrarCliente']);
Route::post('/filmes', [FilmesController::class, 'cadastrarFilme']);
Route::post('/locar', [LocarController::class, 'cadastrarLocacao']);
Route::post('/devolver', [DevolverController::class, 'cadastrarEntrega']);