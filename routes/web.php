<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myfoodController;

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
    return view('index');
});


Route::get('/filiais', function () {
    return view('filiais');
});

Route::get('/restaurantes', function () {
    return view('restaurantes');
});

Route::get('/sobre', function () {
    return view('sobre');
});


Route::get('/index', [myfoodController::class, 'index']);
Route::get('/login', [myfoodController::class, 'login']);
Route::get('/validar', [myfoodController::class, 'validar']);