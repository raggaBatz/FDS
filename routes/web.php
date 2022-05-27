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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('generations', App\Http\Controllers\GenerationController::class)->middleware('auth');
Route::resource('constellations', App\Http\Controllers\ConstellationController::class)->middleware('auth');
Route::resource('centertypes', App\Http\Controllers\CentertypeController::class)->middleware('auth');
Route::resource('centers', App\Http\Controllers\CenterController::class)->middleware('auth');
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('volunteers', App\Http\Controllers\VolunteerController::class)->middleware('auth');
Route::resource('grouptypes', App\Http\Controllers\GrouptypeController::class)->middleware('auth');
Route::resource('groups', App\Http\Controllers\GroupController::class)->middleware('auth');
Route::resource('interventions', App\Http\Controllers\InterventionController::class)->middleware('auth');

Route::get('/pdf1', [App\Http\Controllers\ReportController::class, 'generar1'])->name('pdf1')->middleware('auth');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
