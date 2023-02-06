<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\ProjetController;
use App\Models\Etudiant;
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

Route::get('/detail{id}', function () {
    return view('projet.detail');
})->name('details');

Route::get('/Adama', function () {
    return view('Adama');
});
Route::get('/etudiant', [EtudiantController::class,'index']);
Route::get('/cours', [CoursController::class,'liste']);

Route::get('phase',[PhaseController::class,'index'])->name('phase.index');
Route::post('phase.store',[PhaseController::class,'store'])->name('enregistrer.phase');
Route::get('projet',[ProjetController::class,'index'])->name('projet.index');
Route::post('projet.store',[ProjetController::class,'store'])->name('enregistrer.projet');
Route::get('detail{id}',[ProjetController::class,'getProjet'])->name('details');
Route::get('detailVue/{id}',[ProjetController::class,'vueDetail'])->name('vueDetail');
Route::get('liste',[ProjetController::class,'liste'])->name('liste.projet');