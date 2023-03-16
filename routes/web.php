<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::fallback(FallbackController::class);
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', HomeController::class);




Route::prefix('/blog')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostController::class, 'show'])->name('blog.show');
    Route::get('/create', [PostController::class, 'create'])->name('blog.create');
    Route::post('/', [PostController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('blog.destroy');
});
