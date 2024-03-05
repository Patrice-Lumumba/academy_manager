<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DepartementController as DepartementControllerAlias;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


//Route::get("/inscription_etudiant", [EtudiantController::class, 'create']);
//Route::post('etudiant/save', ([EtudiantController::class, 'store']));

//Route::get('/login', [LoginController::class, 'index'])->name("login");
//Route::post('/login', [LoginController::class, 'store'])->middleware(['guest']);
//
//Route::get('/register', [RegisterController::class, 'index'])->middleware(['guest'])
//    ->name('register');
//Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
//Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Route des Etudiants
Route::controller(EtudiantController::class)->prefix('etudiant')->group(function () {
    Route::get('', 'index')->name('etudiant');
    Route::get('create', 'create')->name('etudiant.create');
    Route::post('store', 'store')->name('etudiant.store');
    Route::get('edit/{code_etud}', 'edit')->name('etudiant.edit');
    Route::put('edit/{code_etud}', 'update')->name('etudiant.update');
    Route::delete('destroy/{code_etud}', 'destroy')->name('etudiant.destroy');
});


//Route des matières
Route::controller(MatiereController::class)->prefix('matiere')->group(function () {
    Route::get('', 'index')->name('matiere');
    Route::get('create', 'create')->name('matiere.create');
    Route::post('store', 'store')->name('matiere.store');
    Route::get('edit/{code_mat}', 'edit')->name('matiere.edit');
    Route::put('edit/{code_mat}', 'update')->name('matiere.update');
    Route::delete('destroy/{code_mat}', 'destroy')->name('matiere.destroy');
});

//Route des départements
Route::controller(DepartementControllerAlias::class)->prefix('departement')->group(function () {
    Route::get('', 'index')->name('departement');
    Route::get('create', 'create')->name('departement.create');
    Route::post('store', 'store')->name('departement.store');
    Route::get('edit/{code_mat}', 'edit')->name('departement.edit');
    Route::put('edit/{code_mat}', 'update')->name('departement.update');
    Route::delete('destroy/{code_mat}', 'destroy')->name('departement.destroy');
});

Route::controller(UserController::class)->prefix('user')->group(function () {
    Route::get('', 'index')->name('user');
    Route::get('create', 'create')->name('user.create');
    Route::post('store', 'store')->name('user.store');
    Route::get('edit/{id}', 'edit')->name('user.edit');
    Route::put('edit/{id}', 'update')->name('user.update');
    Route::delete('destroy/{id}', 'destroy')->name('user.destroy');
});
