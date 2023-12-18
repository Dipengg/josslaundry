<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\PembayaranController;
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
Route::get('/home', function () {
    return view('register/home');
});

Route::get('/laundry', [LaundryController::class, 'index']);
Route::get('/laundry/create', [LaundryController::class, 'create']);
Route::get('/laundry/{id}', [LaundryController::class, 'show']);
Route::post('/laundry/store', [LaundryController::class, 'store']);
Route::get('/laundry/edit/{id}', [LaundryController::class, 'edit']);
Route::post('/laundry/update', [LaundryController::class, 'update']);
Route::get('/laundry/delete/{id}', [LaundryController::class, 'destroy']);

Route::get('/datadiri', [DataDiriController::class, 'index']);
Route::get('/datadiri/create', [DataDiriController::class, 'create']);
Route::get('/datadiri/{id}', [DataDiriController::class, 'show']);
Route::post('/datadiri/store', [DataDiriController::class, 'store']);
Route::get('/datadiri/edit/{id}', [DataDiriController::class, 'edit']);
Route::post('/datadiri/update', [DataDiriController::class, 'update']);
Route::get('/datadiri/delete/{id}', [DataDiriController::class, 'destroy']);

Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/create', [PembayaranController::class, 'create']);
Route::get('/pembayaran/{id}', [PembayaranController::class, 'show']);
Route::post('/pembayaran/store', [PembayaranController::class, 'store']);
Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
Route::post('/pembayaran/update', [PembayaranController::class, 'update']);
Route::get('/pembayaran/delete/{id}', [PembayaranController::class, 'destroy']);
