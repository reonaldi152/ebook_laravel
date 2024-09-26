<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\FrontController;

// Route::get('/', [FrontController::class, 'index'])->name('front.index');

// Route::get('/details', function () {
//     return view('details');
// });

Route::get('/', [EbookController::class, 'index'])->name('index');
Route::get('/ebooks/{id}', [EbookController::class, 'show'])->name('ebooks.show');
Route::get('/about', [AboutController::class, 'index'])->name('about');
