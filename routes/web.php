<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;

Route::view('/', 'pages.landing')->name('page.landing');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');

Route::post('/api/contact/submit', [ContactController::class, 'store']);
