<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MeetingController;
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


// Company All Route --------------------------------------------------------------------------------
Route::get('/', [CompanyController::class, 'index']);
Route::post('/store', [CompanyController::class, 'store'])->name('store');
Route::get('/fetchAll', [CompanyController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [CompanyController::class, 'delete'])->name('delete');
Route::get('/edit', [CompanyController::class, 'edit'])->name('edit');
Route::post('/update', [CompanyController::class, 'update'])->name('update');


// Company All Route --------------------------------------------------------------------------------
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/fetchAll', [ContactController::class, 'fetchAll'])->name('contact.fetchAll');
Route::delete('/contact/delete', [ContactController::class, 'delete'])->name('contact.delete');
Route::get('/contact/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contact/update', [ContactController::class, 'update'])->name('contact.update');

// Meeting All Route --------------------------------------------------------------------------------
Route::get('/meeting', [MeetingController::class, 'index']);
Route::post('/meeting/store', [MeetingController::class, 'store'])->name('meeting.store');
Route::get('/meeting/fetchAll', [MeetingController::class, 'fetchAll'])->name('meeting.fetchAll');
Route::delete('/meeting/delete', [MeetingController::class, 'delete'])->name('meeting.delete');
Route::get('/meeting/edit', [MeetingController::class, 'edit'])->name('meeting.edit');
Route::post('/meeting/update', [MeetingController::class, 'update'])->name('meeting.update');
