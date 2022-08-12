<?php

use App\Http\Controllers\RequestsController;
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

Route::middleware(['auth'])->group(function() {
    Route::get('/', [RequestsController::class, 'allRequests'])->name('dashboard');
    Route::get('/createRequest', [RequestsController::class, 'createRequest'])->name('createRequest');
    Route::post('/createRequestNew', [RequestsController::class, 'createRequestPost']);
    Route::post('/delete/{request}', [RequestsController::class, 'deleteResult']);

});

require __DIR__.'/auth.php';

