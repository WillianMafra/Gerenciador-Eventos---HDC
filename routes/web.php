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
use App\Http\Controllers\GerenciadorEventos;
use Laravel\Jetstream\Rules\Role;

Route::get('/', [GerenciadorEventos::class, 'index']);
Route::get('/events/create', [GerenciadorEventos::class, 'create'])->middleware('auth');
Route::post('/events', [GerenciadorEventos::class, 'store']);
Route::get('/events/{id}', [GerenciadorEventos::class, 'show']);

Route::get('/dashboard', [GerenciadorEventos::class, 'dashboard'])->middleware('auth');
Route::delete('/events/{id}', [GerenciadorEventos::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [GerenciadorEventos::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [GerenciadorEventos::class, 'update'])->middleware('auth');