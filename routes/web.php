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

Route::get('/', [GerenciadorEventos::class, 'index']);
Route::get('/events/create', [GerenciadorEventos::class, 'create']);
Route::post('/events', [GerenciadorEventos::class, 'store']);


