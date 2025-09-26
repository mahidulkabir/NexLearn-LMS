<?php

use App\Http\Controllers\ProfileController;
use App\Http\controllers\backend\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Admin Login Routes
Route::get ('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route:: middleware(['auth','verified'])->prefix('admin')->name('admin')->group(function(){
    Route:: get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
