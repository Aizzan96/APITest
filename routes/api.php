<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/records/index', [APIController::class, 'index'])->name('api.index');
Route::get('/records/show/{id}', [APIController::class, 'show'])->name('api.show');
Route::post('/records/update', [APIController::class, 'update'])->name('api.update');
Route::post('/records/delete/{id}', [APIController::class, 'delete'])->name('api.delete');



