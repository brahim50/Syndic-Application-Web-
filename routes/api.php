<?php

use App\Http\Controllers\AuthControllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::post('/auth/register',[AuthControllers::class, 'register']);
//Route::post('/auth/register',[AuthControllers::class, 'register']);


/* Appartement */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Models\Appartement;
use App\Models\Lmmeuble;
use App\Models\Resident;
use App\Models\Revenu;
use App\Models\Syndic;
use App\Models\User;




Route::get('appartements', function () {
    return Appartement::all();
});

Route::get('appartements/{id}', function ($id) {
    return Appartement::find($id);
});

Route::post('appartements', function (Request $request) {
    return Appartement::create($request->all());
});

Route::put('appartements/{id}', function (Request $request, $id) {
    $article = Appartement::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('appartements/{id}', function ($id) {
    Appartement::find($id)->delete();

    return 204;
});


/* Lmmeuble */

Route::get('lmmeubles', function () {
    return Lmmeuble::all();
});

Route::get('lmmeubles/{id}', function ($id) {
    return Lmmeuble::find($id);
});

Route::post('lmmeubles', function (Request $request) {
    return Lmmeuble::create($request->all());
});

Route::put('lmmeubles/{id}', function (Request $request, $id) {
    $lmmeuble = Lmmeuble::findOrFail($id);
    $lmmeuble->update($request->all());

    return $lmmeuble;
});

Route::delete('lmmeubles/{id}', function ($id) {
    Lmmeuble::find($id)->delete();

    return 204;
});

/* resident */

Route::get('residents', function () {
    return Resident::all();
});

Route::get('residents/{id}', function ($id) {
    return Resident::find($id);
});

Route::post('residents', function (Request $request) {
    return Resident::create($request->all());
});

Route::put('residents/{id}', function (Request $request, $id) {
    $resident = Resident::findOrFail($id);
    $resident->update($request->all());

    return $resident;
});

Route::delete('residents/{id}', function ($id) {
    Resident::find($id)->delete();

    return 204;
});

/* resident */

Route::get('residents', function () {
    return Resident::all();
});

Route::get('residents/{id}', function ($id) {
    return Resident::find($id);
});

Route::post('residents', function (Request $request) {
    return Resident::create($request->all());
});

Route::put('residents/{id}', function (Request $request, $id) {
    $resident = Resident::findOrFail($id);
    $resident->update($request->all());

    return $resident;
});

Route::delete('residents/{id}', function ($id) {
    Resident::find($id)->delete();

    return 204;
});

/* revenu */

Route::get('revenus', function () {
    return Revenu::all();
});

Route::get('revenus/{id}', function ($id) {
    return Revenu::find($id);
});

Route::post('revenus', function (Request $request) {
    return Revenu::create($request->all());
});

Route::put('revenus/{id}', function (Request $request, $id) {
    $revenu = Revenu::findOrFail($id);
    $revenu->update($request->all());

    return $revenu;
});

Route::delete('revenus/{id}', function ($id) {
    Revenu::find($id)->delete();

    return 204;
});


/* Syndic */

Route::get('syndics', function () {
    return Syndic::all();
});

Route::get('revenus/{id}', function ($id) {
    return Syndic::find($id);
});

Route::post('syndics', function (Request $request) {
    return Syndic::create($request->all());
});

Route::put('syndics/{id}', function (Request $request, $id) {
    $syndic = Syndic::findOrFail($id);
    $syndic->update($request->all());

    return $syndic;
});

Route::delete('syndics/{id}', function ($id) {
    Syndic::find($id)->delete();

    return 204;
});

/* User */

Route::get('users', function () {
    return User::all();
});

Route::get('users/{id}', function ($id) {
    return User::find($id);
});

Route::post('users', function (Request $request) {
    return User::create($request->all());
});

Route::put('users/{id}', function (Request $request, $id) {
    $user = User::findOrFail($id);
    $user->update($request->all());

    return $user;
});

Route::delete('users/{id}', function ($id) {
    User::find($id)->delete();

    return 204;
});
