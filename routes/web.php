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

Route::get('form', [FormController::class, 'create']);
Route::post('form/store', [FormController::class, 'store']);
Route::get('form/success', [FormController::class, 'success']);

Route::get('ruang/form', [KamarController::class, 'formruang']);
Route::post('ruang/form/store', [KamarController::class, 'storeruang']);
Route::get('ruang/form/success', [KamarController::class, 'success']);
Route::get('ruang/list', [KamarController::class, 'listruang']);

Route::get('kamar', [KamarController::class, 'index']);
Route::get('kamar/form', [KamarController::class, 'formkamar']);

