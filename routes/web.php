<?php

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

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', \App\Http\Controllers\UserProfile::class)->name('dashboard');
    Route::get('/manage-discs', \App\Http\Controllers\UserDiscController::class)->name('managediscs');
    Route::get('/manage-discs/add', [\App\Http\Controllers\UserDiscController::class, 'addImages'])->name('managediscimages');
    Route::post('/manage-discs/add-cropped', [\App\Http\Controllers\UserDiscController::class, 'uploadCropImage'])->name('managediscimagecrop');
    Route::get('/manage-discs/clear-cropped/{img}', [\App\Http\Controllers\UserDiscController::class, 'clearImages'])->name('managediscclearimages');
    Route::get('/manage-discs/add-detail', [\App\Http\Controllers\UserDiscController::class, 'addDetail'])->name('managediscdetails');
    Route::post('/manage-discs/save', [\App\Http\Controllers\UserDiscController::class, 'saveDisc'])->name('managediscsavedisc');
});

//Public facing pages
Route::get('/search', \App\Http\Controllers\SearchDiscsController::class)->name('userdiscsearch');
