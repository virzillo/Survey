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

Route::group(['middleware' => ['role:super-admin|agente']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/survey', [App\Http\Controllers\SurveyController::class, 'index'])->name('survey');
    Route::get('/survey/create', [App\Http\Controllers\SurveyController::class, 'create'])->name('survey.create');
    Route::post('/survey', [App\Http\Controllers\SurveyController::class, 'store'])->name('survey.store');


    Route::get('/survey/domande', [App\Http\Controllers\SurveyController::class, 'listadomande'])->name('survey.listadomande');
    Route::get('/survey/{id}', [App\Http\Controllers\SurveyController::class, 'modificadomande'])->name('survey.modificadomande');

    Route::get('/questions/create', [App\Http\Controllers\QuestionsController::class, 'create'])->name('questions.create');
    Route::post('/questions', [App\Http\Controllers\QuestionsController::class, 'store'])->name('questions.store');
    Route::get('/questions/{id}', [App\Http\Controllers\QuestionsController::class, 'show'])->name('questions.show');
    Route::put('/questions/{id}/update', 'QuestionsController@update')->name('questions.update');


    // Route::get('/domande', [App\Http\Controllers\SurveyController::class, 'domande'])->name('domande');


    // Route::post('/survey/inseriscidomande', [App\Http\Controllers\SurveyController::class, 'inseriscidomande'])->name('survey.inseriscidomande');
    // Route::get('/agenti', [App\Http\Controllers\AgentController::class, 'index'])->name('agenti');

    Route::get('/agenti',[App\Http\Controllers\UsersController::class, 'index'])->name('agenti');
    Route::get('/agenti/inserisci', [App\Http\Controllers\UsersController::class, 'create']);
    Route::post('/agenti', [App\Http\Controllers\UsersController::class, 'register'])->name('crea.utente');
    Route::get('/agenti/{id}', [App\Http\Controllers\UsersController::class, 'show'])->name('utenti.profilo');
    Route::put('/agenti/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('modifica.utente');
    Route::delete('/agenti/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('elimina.utente');


});


