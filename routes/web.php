<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/settings', [AdminController::class, 'settings'])->name('admin-settings');
Route::get('/users', [AdminController::class, 'users'])->name('admin-users');
Route::get('/roles', [AdminController::class, 'roles'])->name('admin-roles');
Route::get('/permissions', [AdminController::class, 'permissions'])->name('admin-permissions');

Route::post('/roles', [RoleController::class, 'store'])->name('role.store');
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('role.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
