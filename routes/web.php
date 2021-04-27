<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/discadmin', function () {
    return view('admin_disc_add');
});
Route::middleware(['auth:sanctum', 'verified'])->post('/save-disc', [DiscController::class, 'saveNew']);
