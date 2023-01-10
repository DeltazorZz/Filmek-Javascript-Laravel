<?php

use App\Http\Controllers\FilmekController;
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
Route::get('/api/filmek/', [FilmekController::class, 'index']);
Route::post('/api/filmek', [FilmekController::class, 'store']);
Route::put('/api/filmek/{id}', [FilmekController::class, 'update']);
Route::delete('/api/filmek/{id}', [FilmekController::class, 'destroy']);


Route::get('/', function () {
    return view('index');
});
