<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('delete-comment1/{id}', [CommentController::class, 'deleteComment1'])->name('delete-comment1');
Route::get('edit-comment1/{id}', [CommentController::class, 'editComment1'])->name('edit-comment1');
Route::post('comment1-update/{id}', [CommentController::class, 'updateComment1'])->name('comment1-update');


Route::get('delete-comment2/{id}', [CommentController::class, 'deleteComment2'])->name('delete-comment2');
Route::get('edit-comment2/{id}', [CommentController::class, 'editComment2'])->name('edit-comment2');
Route::post('comment2-update/{id}', [CommentController::class, 'updateComment2'])->name('comment2-update');

Route::get('delete-comment3/{id}', [CommentController::class, 'deleteComment3'])->name('delete-comment3');
Route::get('edit-comment3/{id}', [CommentController::class, 'editComment3'])->name('edit-comment3');
Route::post('comment3-update/{id}', [CommentController::class, 'updateComment3'])->name('comment3-update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/comment1', [CommentController::class, 'comment1'])->name('comment1');
Route::post('/comment2', [CommentController::class, 'comment2'])->name('comment2');
Route::post('/comment3', [CommentController::class, 'comment3'])->name('comment3');

require __DIR__ . '/auth.php';
