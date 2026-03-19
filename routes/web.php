<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.landing')->name('page.landing');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');
