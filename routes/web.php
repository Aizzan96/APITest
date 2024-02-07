<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return redirect()->route('index');
;
});

Route::get('/app', [HomeController::class, 'app'])->name('app');
Route::get('/test/index', [HomeController::class, 'index'])->name('index');
Route::get('/test/show', [HomeController::class, 'show'])->name('show');
Route::post('/test/update', [HomeController::class, 'update'])->name('update');
Route::post('/test/delete', [HomeController::class, 'delete'])->name('delete');





