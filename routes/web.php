<?php

use App\Http\Controllers\AppartementControllers;
use App\Http\Controllers\CategorieControllers;
use App\Http\Controllers\DepensesControllers;
use App\Http\Controllers\LmmeubleControllers;
use App\Http\Controllers\ResidentControllers;
use App\Http\Controllers\RevenuControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SyndicControllers;

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



Route::get('/login',[SyndicControllers::class, 'login'])->name('login');
Route::get('/register',[SyndicControllers::class, 'register'])->name('register');

Route::post('/save',[SyndicControllers::class, 'save'])->name('auth.save');
Route::post('/check',[SyndicControllers::class, 'check'])->name('auth.check');

Route::get('/dashboard',[SyndicControllers::class, 'dashboard'])->name('dashboard');

Route::get('/lmmeuble',[LmmeubleControllers::class, 'lmmeuble'])->name('lmmeuble');

Route::post('/createmeuble',[LmmeubleControllers::class, 'createmeuble'])->name('createmeuble');

Route::get('/fetch-allMeuble',[LmmeubleControllers::class, 'fetchAllLmmeuble'])->name('fetchAllLmmeuble');

Route::post('/deleteLmmeuble',[LmmeubleControllers::class, 'deleteLmmeuble'])->name('deleteLmmeuble');

Route::get('/edit',[LmmeubleControllers::class, 'edit'])->name('edit');

Route::post('/update',[LmmeubleControllers::class, 'update'])->name('update');

Route::get('/appartement',[AppartementControllers::class, 'appartement'])->name('appartement');

Route::get('/fetchAllappartement',[AppartementControllers::class, 'fetchAllappartement'])->name('fetchAllappartement');


Route::post('/createAppartement',[AppartementControllers::class, 'createAppartement'])->name('createAppartement');

Route::post('/deleteAppatement',[AppartementControllers::class, 'deleteAppatement'])->name('deleteAppatement');

Route::get('/editAppartement',[AppartementControllers::class, 'editAppartement'])->name('editAppartement');


Route::post('/updateappartement',[AppartementControllers::class, 'updateappartement'])->name('updateappartement');


Route::get('/lmmeubleEdit',[LmmeubleControllers::class, 'lmmeubleEdit'])->name('lmmeubleEdit');



Route::get('/revenu',[RevenuControllers::class, 'Revenu'])->name('revenu');



Route::post('/createrevenu',[RevenuControllers::class, 'createrevenu'])->name('createrevenu');



Route::get('/fetchAllrevenu',[RevenuControllers::class, 'fetchAllrevenu'])->name('fetchAllrevenu');




Route::get('/editRevenu',[RevenuControllers::class, 'editRevenu'])->name('editRevenu');




Route::post('/updaterevune',[RevenuControllers::class, 'updaterevune'])->name('updaterevune');



Route::post('/deleterevenu',[RevenuControllers::class, 'deleterevenu'])->name('deleterevenu');

Route::get('/resident',[ResidentControllers::class, 'resident'])->name('resident');

Route::post('/createResident',[ResidentControllers::class, 'createResident'])->name('createResident');



Route::get('/EditResident/{id}',[ResidentControllers::class, 'EditResident'])->name('EditResident');



Route::post('/updateresident',[ResidentControllers::class, 'updateresident'])->name('updateresident');



Route::delete('/deleteresident/Resident{id}',[ResidentControllers::class, 'deleteresident'])->name('deleteresident');


Route::get('/Email/{id}',[ResidentControllers::class, 'Email'])->name('Email');


Route::post('/send',[ResidentControllers::class, 'send'])->name('send.email');

Route::get('/categorie',[CategorieControllers::class, 'categorie'])->name('categorie');

Route::post('/add',[CategorieControllers::class, 'add'])->name('add');




Route::post('/deleteCategorie',[CategorieControllers::class, 'deleteCategorie'])->name('deleteCategorie');



Route::get('/depense',[DepensesControllers::class, 'depense'])->name('depense');



Route::post('/create',[DepensesControllers::class, 'create'])->name('create');



Route::delete('/deletedepense/Depenses{id}',[DepensesControllers::class, 'deletedepense'])->name('deletedepense');


Route::get('/EditDepanse/{id}',[DepensesControllers::class, 'EditDepanse'])->name('EditDepanse');


Route::post('/updateDepense',[DepensesControllers::class, 'updateDepense'])->name('updateDepense');


