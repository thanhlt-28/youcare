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
Route::get('page_not_found', function () {
    return view('page_not_found');
});

// ===== Router Clients ===== //
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
    Route::get('thong-tin-thanh-toan', function () {
        return view('clients.billing_infor');
    })->name('clients.billing_infor');
    Route::get('phan-mem', function () {
        return view('clients.features');
    })->name('clients.features');
    Route::get('bang-gia', function () {
        return view('clients.pricing');
    })->name('clients.pricing');
    Route::get('kien-thuc', function () {
        return view('clients.knowledge');
    })->name('clients.knowledge');
    
});

// ===== Router Admin ===== //
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('page_error_404', function () {
        return view('admin.page_error_404');
    })->name('page_error_404');
});


