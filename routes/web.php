<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;

Route::view('/', 'pages.landing')->name('page.landing');
Route::get('/angebot', [ApartmentController::class, 'index'])->name('page.offer');
Route::view('/wohnen', 'pages.living')->name('page.living');
Route::view('/lage', 'pages.location')->name('page.location');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');

