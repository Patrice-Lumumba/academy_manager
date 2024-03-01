<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EtudiantController;
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
Route::controller(EtudiantController::class)->prefix('etudiant')->group(function () {
    Route::get('', 'index')->name('etudiant');
    Route::get('create', 'create')->name('etudiant.create');
    Route::post('store', 'store')->name('etudiant.store');
    Route::get('edit/{code_etud}', 'edit')->name('etudiant.edit');
    Route::put('edit/{code_etud}', 'update')->name('etudiant.update');
    Route::delete('destroy/{code_etud}', 'destroy')->name('etudiant.destroy');
});
