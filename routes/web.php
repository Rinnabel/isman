<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KamarController;

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

Route::get('/', [FormController::class, 'listpasien']);
Route::get('/cari', [FormController::class, 'cari']);
Route::get('/listpasien/{pasien_nik}', [FormController::class, 'show']);
Route::delete('/listpasien/{pasien_nik}', [FormController::class, 'delete']);
Route::get('/listpasien/{pasien_nik}/edit', [FormController::class, 'edit']);
Route::get('/listpasien/{pasien_nik}/edit/getkamar/{id}',[FormController::class, 'getKamar']);
Route::put('/listpasien/{pasien_nik}/update', [FormController::class, 'update']);

Route::get('form', [FormController::class, 'create']);
Route::get('form/getkamar/{id}',[FormController::class, 'getKamar']);
Route::post('form/store', [FormController::class, 'store']);
Route::get('form/success', [FormController::class, 'create']);

Route::get('ruang/form', [KamarController::class, 'formruang']);
Route::post('ruang/form/store', [KamarController::class, 'storeruang']);
Route::get('ruang/form/success', [KamarController::class, 'success']);
Route::get('ruang/list', [KamarController::class, 'listruang']);
Route::get('/ruang/{id}/edit', [KamarController::class, 'editruang']);

Route::get('kamar/form', [KamarController::class, 'formkamar']);
Route::post('kamar/form/store', [KamarController::class, 'storekamar']);
Route::get('kamar/form/success', [KamarController::class, 'formkamar']);
Route::get('kamar/list', [KamarController::class, 'listkamar']);
Route::delete('kamar/list/{id}', [KamarController::class, 'deletekamar']);

