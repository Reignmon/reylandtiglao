<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Models\Employees;
use Illuminate\Support\Facades\Auth;

Route::get('employe', [EmployeesController::class, 'index'])->name('employe.index');
Route::post('employe', [EmployeesController::class, 'store']);
Route::get('employe/{id}/update',[EmployeesController::class, 'edit'])->name('employe.update');
Route::get('employe/{id}/delete',[EmployeesController::class, 'destroy']);
Route::put('employe/{id}/update',[EmployeesController::class, 'update']);


Route::get('employe/dashboard', [EmployeesController::class, 'dashboard'])->name('employe.dashboard');
Route::get('employe/bsit3a', [EmployeesController::class, 'showBSIT'])->name('employe.bsit3a');
Route::get('employe/add', [EmployeesController::class, 'add'])->name('employe.add');


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
