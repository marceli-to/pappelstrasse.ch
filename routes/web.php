<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;

Route::view('/', 'pages.landing')->name('page.home');

Route::post('/api/contact/submit', [ContactController::class, 'store']);
