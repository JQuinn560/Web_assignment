<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::middleware('admin')->group(function () {
    Route::get('/userList', [UserController::class, 'index'])->name('user.list');
    Route::delete('/deleteUser/{id}', [UserController::class, 'destroy'])->name('user.delete');

});
Route::middleware('auth')->group(function () {

    Route::resource('info', InfoController::class);
});

require __DIR__.'/auth.php';