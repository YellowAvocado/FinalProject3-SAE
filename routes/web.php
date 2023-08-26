<?php

use App\Http\Controllers\AdminController;
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

Route::middleware('auth', 'can:viewAdminPanel')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

});
/*
Route::get('/projects',[\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}',[\App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');
Route::get('/projects/create',[\App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects',[\App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store');*/

Route::resource('/projects', \App\Http\Controllers\ProjectController::class);
Route::get('/graphdesign',[\App\Http\Controllers\GraphicDesignController::class, 'index'])->name('graphdesign.index');
Route::get('/uxdesign',[\App\Http\Controllers\UXDesignController::class, 'index'])->name('uxdesign.index');
Route::resource('/admin',AdminController::class);


/*Route::middleware(['auth', 'can:viewAdminPanel'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    // Define other admin routes here
});*/

require __DIR__.'/auth.php';
