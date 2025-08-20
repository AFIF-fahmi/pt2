<?php

use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/job', function () {
    return view('job');
});

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/galeri', function () {
    return view('galeri');
});

// 

Route::get('/layanan/{section?}', [LayananController::class, 'index'])
     ->where('section', '[A-Za-z0-9\-_]+')
     ->name('layanan');