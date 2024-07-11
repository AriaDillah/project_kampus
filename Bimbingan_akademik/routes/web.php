<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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




Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/', [HomeController::class, 'index']);


Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/prodi', [ProdiController::class, 'index'])->name('prodis.index');
Route::get('/admin/prodi/create', [ProdiController::class, 'create'])->name('prodis.create');
Route::post('/admin/prodi/store', [ProdiController::class, 'store'])->name('prodis.store');
Route::get('/admin/prodi/{prodi}', [ProdiController::class, 'show'])->name('prodis.show');
Route::get('/admin/prodi/{prodi}/edit', [ProdiController::class, 'edit'])->name('prodis.edit');
Route::put('/admin/prodi/{prodi}', [ProdiController::class, 'update'])->name('prodis.update');
Route::delete('/admin/prodi/{prodi}', [ProdiController::class, 'destroy'])->name('prodis.destroy');

Route::get('/admin/dosen', [DosenController::class, 'index'])->name('dosens.index');
Route::get('/admin/dosen/create', [DosenController::class, 'create'])->name('dosens.create');
Route::post('/admin/dosen/store', [DosenController::class, 'store'])->name('dosens.store');
Route::get('/admin/dosen/{dosen}', [DosenController::class, 'show'])->name('dosens.show');
Route::get('/admin/dosen/{dosen}/edit', [DosenController::class, 'edit'])->name('dosens.edit');
Route::put('/admin/dosen/{dosen}', [DosenController::class, 'update'])->name('dosens.update');
Route::delete('/admin/dosen/{dosen}', [DosenController::class, 'destroy'])->name('dosens.destroy');

Route::get('/admin/rombel', [RombelController::class, 'index'])->name('rombels.index');
Route::get('/admin/rombel/create', [RombelController::class, 'create'])->name('rombels.create');
Route::post('/admin/rombel/store', [RombelController::class, 'store'])->name('rombels.store');
Route::get('/admin/rombel/{rombel}', [RombelController::class, 'show'])->name('rombels.show');
Route::get('/admin/rombel/{rombel}/edit', [RombelController::class, 'edit'])->name('rombels.edit');
Route::put('/admin/rombel/{rombel}', [RombelController::class, 'update'])->name('rombels.update');
Route::delete('/admin/rombel/{rombel}', [RombelController::class, 'destroy'])->name('rombels.destroy');

Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
Route::get('/admin/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
Route::post('/admin/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
Route::get('/admin/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
Route::get('/admin/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
Route::put('/admin/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
Route::delete('/admin/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');



require __DIR__.'/auth.php';


