<?php

use App\Http\Controllers\AprendizController;
use App\Http\Controllers\IntructorController;
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
    return view('welcome');
})->name('home');

// Route::middleware(['auth:sanctum', 'verified'])->get('/instructor', function () {
//     return view('instructor.index');
// })->name('instructor');

Route::resource('instructor', IntructorController::class);
Route::resource('aprendiz', AprendizController::class);
