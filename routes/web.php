<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;

Route::view('/', 'pages.landing')->name('page.landing');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');

Route::get('/wohnungen', [ApartmentController::class, 'index'])->name('page.apartments');
