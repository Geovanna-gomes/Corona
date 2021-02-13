<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerCorona;

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

Route::get('/', [ControllerCorona::class, 'home'])->name('home');
Route::get('/cidades', [ControllerCorona::class, 'cidades']);
Route::get('/contatoeinfo', [ControllerCorona::class, 'contatoeinfo']);
Route::get('/links', [ControllerCorona::class, 'links']);
Route::get('/sobre', [ControllerCorona::class, 'sobre']);


