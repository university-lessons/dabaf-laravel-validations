<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsuranceController;


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

Route::controller(InsuranceController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/insurance/new', 'new');
    Route::post('/insurance/store', 'store');
});