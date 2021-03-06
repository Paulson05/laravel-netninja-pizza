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


Route::get('/pizzas', 'Pizza2Controller@index')-> middleware('auth');
Route::get('/pizzas/create', 'Pizza2Controller@create');
Route::post('/pizzas', 'Pizza2Controller@store');
Route::get('/pizzas/{id}', 'Pizza2Controller@show')->middleware('auth');
Route::delete('/pizzas/{id}', 'pizza2Controller@destroy')->middleware('auth');
Auth::routes(
    [
        'register' => false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
