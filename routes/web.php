<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::prefix('/')->group(function () {
    Route::get('gioi-thieu', function () {
        return view('clients.about');
    })->name('clients.about');
    Route::get('lien-he', function () {
        return view('clients.contact');
    })->name('clients.contact');
    Route::get('tuyen-dung', function () {
        return view('clients.post.enlist');
    })->name('clients.post.enlist');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});


