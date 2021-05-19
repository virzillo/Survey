<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => ['role:super-admin']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/survey', [App\Http\Controllers\SurveyController::class, 'index'])->name('survey');
    Route::get('/domande', [App\Http\Controllers\SurveyController::class, 'domande'])->name('domande');

    // Route::get('/agenti', [App\Http\Controllers\AgentController::class, 'index'])->name('agenti');


    Route::get('/agenti',[App\Http\Controllers\UsersController::class, 'index'])->name('agenti');
    Route::get('/agenti/inserisci', [App\Http\Controllers\UsersController::class, 'create']);
    Route::post('/agenti', [App\Http\Controllers\UsersController::class, 'register'])->name('crea.utente');
    Route::get('/agenti/{id}', [App\Http\Controllers\UsersController::class, 'show'])->name('utenti.profilo');
    Route::put('/agenti/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('modifica.utente');
    Route::delete('/agenti/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('elimina.utente');


});


