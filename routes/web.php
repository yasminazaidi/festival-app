<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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



Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/admin/news', [NewsController::class, 'store'])->name('news.store');
});

use App\Http\Controllers\FaqController;

// Public display
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// Admin management
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('/admin/faq', [FaqController::class, 'store'])->name('faq.store');
});

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');