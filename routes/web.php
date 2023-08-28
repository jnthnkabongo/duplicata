<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PersonneController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [authController::class, 'index'])->name('index'); //Auth au démarrage
Route::post('login', [authController::class, 'create'])->name('soumission-formulaire'); //Soumission du formulaire de connexion
Route::get('gestion-app', [homeController::class, 'index'])->name('redirect');

Route::get('index', [PersonneController::class, 'index'])->name('liste-personne'); //Liste des electeurs demandeurs du duplicata
Route::get('afficher-personne/{duplicata}', [PersonneController::class, 'store'])->name('afficher-personne'); //Get un electeurs pour visualiser
Route::get('ajout-personne', [PersonneController::class, 'show'])->name('ajout-personne'); //Affichagedu formulaire de création de la personne
Route::post('ajouter-personne', [PersonneController::class, 'create'])->name('ajouter-personne'); //Create electeur

