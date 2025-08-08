<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\LandingPage\LandingpageController::class, 'index'])->name('index');

Route::get('/sejarah', [App\Http\Controllers\History\HistoryController::class, 'index'])->name('sejarah');

Route::get('/visimisi', [App\Http\Controllers\VisionMission\VisionMissionController::class, 'index'])->name('visimisi');

Route::get('/fasilitas', [App\Http\Controllers\Facility\FacilityController::class, 'index'])->name('fasilitas');

Route::get('/sambutan', [App\Http\Controllers\Greeting\GreetingController::class, 'index'])->name('sambutan');

Route::get('/sdm', [App\Http\Controllers\HumanResources\HumanResourcesController::class, 'index'])->name('sdm');

Route::get('/pengumuman', [App\Http\Controllers\Announcement\AnnouncementController::class, 'index'])->name('pengumuman');

Route::get('/pendaftaran', [App\Http\Controllers\Registration\RegistrationController::class, 'index'])->name('pendaftaran');
// Rute untuk menyimpan data pendaftaran
Route::post('/pendaftaran', [App\Http\Controllers\Registration\RegistrationController::class, 'store'])->name('pendaftaran.store');

// Route untuk detail pengumuman berdasarkan slug
Route::get('/pengumuman/{slug}', [App\Http\Controllers\Announcement\AnnouncementController::class, 'show'])->name('pengumuman.show');
Route::get('/berita/{slug}', [App\Http\Controllers\News\NewsController::class, 'show'])->name('berita.show');
