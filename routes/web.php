<?php

use App\Http\Controllers\VotingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminPaslonController;
use App\Http\Controllers\DashboardController;
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
// Default route redirect to user/login
Route::get('/', function () {
    return redirect()->route('login');
});
// Dashboard
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/voting', [VotingController::class, 'index']); // Pastikan rute ini mengarah ke metode index
    Route::get('/hubungikami', [DashboardController::class, 'hubungikami']);
    Route::get('/result', [VotingController::class, 'result']);
    Route::get('/detailpaslon/', [DashboardController::class, 'detailpaslon']);
});
// Submit Vote
Route::post('/submit-vote', [VotingController::class, 'store']);


Route::prefix('user')->group(function () {
    Route::get('/register', [UserController::class, 'register']);
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login/auth', [UserController::class, 'loginAuth']);
    Route::post('/register/store', [UserController::class, 'storeRegister']);
    Route::post('/logout', [UserController::class, 'logout']);
});


Route::prefix('admin')->group(function () {
    Route::get('/managepaslon', [AdminPaslonController::class, 'index'])->name('admin.managepaslon');
    Route::get('/managepaslon/create', [AdminPaslonController::class, 'create'])->name('admin.managepaslon.create');
    Route::post('/managepaslon/store', [AdminPaslonController::class, 'store'])->name('admin.managepaslon.store');
    Route::get('/managepaslon/{id}/edit', [AdminPaslonController::class, 'edit'])->name('admin.managepaslon.edit');
    Route::put('/managepaslon/{id}', [AdminPaslonController::class, 'update'])->name('admin.managepaslon.update');
    Route::delete('/managepaslon/{id}', [AdminPaslonController::class, 'destroy'])->name('admin.managepaslon.destroy');
    Route::get('/managepaslon/results', [AdminPaslonController::class, 'results'])->name('admin.results.hasil');
    Route::get('/managepaslon/history', [AdminPaslonController::class, 'history'])->name('admin.history.history');
});
