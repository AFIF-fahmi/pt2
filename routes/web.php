<?php

use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/cek-db', function () {
    try {
        DB::connection()->getPdo();
        return "✅ Koneksi ke database berhasil: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "❌ Gagal konek DB: " . $e->getMessage();
    }
});

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

use App\Http\Controllers\BlogController;
// Routea::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/test-area', function () {
    return view('test-area');
});

// 

Route::get('/layanan/{section?}', [LayananController::class, 'index'])
     ->where('section', '[A-Za-z0-9\-_]+')
     ->name('layanan');