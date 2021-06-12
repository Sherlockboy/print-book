<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'formula1'])->name('formula1');
Route::get('/formula2', [HomeController::class, 'formula2'])->name('formula2');
Route::get('/formula3', [HomeController::class, 'formula3'])->name('formula3');

Route::prefix('render')->name('render.')->group(function() {
   Route::get('formula1', [HomeController::class, 'renderFormula1'])->name('formula1');
   Route::get('formula2', [HomeController::class, 'renderFormula2'])->name('formula2');
   Route::get('formula3', [HomeController::class, 'renderFormula3'])->name('formula3');
});
