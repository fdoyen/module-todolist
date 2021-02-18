<?php
use Illuminate\Support\Facades\Route;
use Modules\Todo\Http\Controllers\TodoController;
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

Route::prefix('/todo')->group(function () {
    Route::get('/all/{id}', [TodoController::class, 'all'])->name('todoall');
    Route::post('/create', [TodoController::class, 'create']);
    Route::put('/update/{id}', [TodoController::class, 'update']);
    Route::get('/form/{id?}', [TodoController::class, 'form']);
    Route::delete('/delete/{id}', [TodoController::class, 'delete']);
    Route::get('/{id}', [TodoController::class, 'getOne']);
});