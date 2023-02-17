<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubmissionsController;
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





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/saveForm', [SubmissionsController::class, 'saveForm'])->name('saveForm');
    Route::get('/submissions', [SubmissionsController::class, 'index'])->name('submissions');
    Route::get('delete/{id}', [SubmissionsController::class, 'destroy']);
    Route::view('/','homepage')->name('homepage');
    Route::view('/form','dashboard')->name('dashboard');
});

require __DIR__.'/auth.php';
