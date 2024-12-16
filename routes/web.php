<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

Route::get('/faq', [PageController::class, 'faq'])->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified',])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/students',[StudentController::class,'index'])->middleware('can:read')->name('students');
    Route::post('/students/add',[StudentController::class,'add'])->middleware('can:create')->name('students.add');
    Route::get('/students/edit',[StudentController::class,'edit'])->middleware('can:update')->name('students.edit');
    Route::post('/students/update',[StudentController::class,'update'])->middleware('can:update')->name('students.update');
    Route::get('/students/delete',[StudentController::class,'delete'])->middleware('can:delete')->name('students.delete');
});

require __DIR__.'/auth.php';
