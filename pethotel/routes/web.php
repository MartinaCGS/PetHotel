<?php

use App\Http\Controllers\PethotelController;
//use App\Http\Controllers\PetHotelsController;
//use App\Http\Controllers\StudentController;
//use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route::get('/first/{name}',[FirstController::class, 'demo']);
// Route::resource('/students', StudentController::class);
// Route::resource('/pethotels', PetHotelsController::class);
// Route::resource('/pethotels', PethotelsController::class);
Route::resource('pethotels', PethotelController::class);
