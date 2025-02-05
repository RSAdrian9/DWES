<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

// 1. Forma de llamar al middleware
//Route::get('/', [ExampleController::class, 'index'])->name('index')->middleware('example');

// 2. Forma de llamar al middleware
// Route::middleware('example')->get('/', [ExampleController::class, 'index']);

//Le damos también un nombre de ruta con el método name
//Route::get('/no-access', [ExampleController::class, 'noAccess'])->name('no-access');

Route::post('/create', [AuthController::class, 'store'])->name('create');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login');

//ruta para obtener un dato protegido, aprovechamos la de laravel.

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});