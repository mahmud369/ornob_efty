<?php

use App\Http\Controllers\CompanyController;
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

Route::get('/', [CompanyController::class, 'index']);
Route::post('/store', [CompanyController::class, 'store'])->name('store');
Route::get('/fetchAll', [CompanyController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [CompanyController::class, 'delete'])->name('delete');
Route::get('/edit', [CompanyController::class, 'edit'])->name('edit');
Route::post('/update', [CompanyController::class, 'update'])->name('update');
