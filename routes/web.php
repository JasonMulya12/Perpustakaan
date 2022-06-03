<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentGroupController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('student', StudentController::class)->middleware(['auth']);
Route::resource('book', BookController::class)->middleware(['auth']);
Route::resource('borrowing', BorrowingController::class)->middleware(['auth']);
Route::resource('rayon', RayonController::class)->middleware(['auth']);
Route::resource('studentGroup', StudentGroupController::class)->middleware(['auth']);
Route::resource('publisher', PublisherController::class)->middleware(['auth']);

