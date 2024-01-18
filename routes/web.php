<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Models\Validation;

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

Route::get('/', [FormController::class, 'home']);
Route::post('/submitted', [FormController::class, 'store'])->name('submit');
