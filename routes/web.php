<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DocteursController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SpecialitesController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\WelcomeController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('dashboard', [AuthentificationController::class, 'dashboard'])->name('dashboard');

Route::get('welcome', [WelcomeController::class, 'index'])->name('welcome');

Route::resource('patients', PatientsController::class);
Route::get('supprimer-patients/{id}', [DocteursController::class, 'destroy']);

Route::resource('docteurs', DocteursController::class);
Route::get('supprimer-docteurs/{id}', [DocteursController::class, 'destroy']);

Route::resource('services',ServicesController::class);
Route::get('supprimer-services/{id}', [ServicesController::class, 'destroy']);

Route::resource('specialites', SpecialitesController::class);
Route::get('supprimer-specialites/{id}', [SpecialitesController::class, 'destroy']);



Route::resource('rendezvous', RendezvousController::class);
Route::get('supprimer-rendezvous/{id}', [RendezvousController::class, 'destroy']);

Route::resource('roles', RolesController::class);
Route::get('supprimer-roles/{id}', [RolesController::class, 'destroy']);



Route::post('/login',[AuthentificationController::class, 'login'] )->name('login');
Route::get('/logout',[AuthentificationController::class, 'logout'] )->name('logout');




