<?php

use App\Http\Controllers\CatePostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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


Route::view('login', 'auth.login')->name('login');
Route::post('login', [UserController::class, 'postLogin'])->name('auth.postLogin');
Route::any('logout', function () {
    Auth::logout();
    return redirect(route('login'));
})->name('logout');

Route::view('register', 'auth.register')->name('register');
Route::post('register', [RegisterController::class, 'postRegister'])->name('auth.postRegister');

// Liên hệ 
Route::get('lien-he', function () {
    return view('clients.contact');
})->name('clients.contact');

// ===== Router Clients ===== //
Route::prefix('/')->group(function () {
    // Giới thiệu
    Route::get('gioi-thieu', function () {
        return view('clients.about');
    })->name('clients.about');
    // Tầm nhìn & sứ mệnh
    Route::get('gioi-thieu/tam-nhin-su-menh', function () {
        return view('clients.about.vision');
    })->name('clients.about.vision');
    // Đội ngũ chuyên gia
    Route::get('gioi-thieu/doi-ngu-chuyen-gia', function () {
        return view('clients.about.team_experts');
    })->name('clients.about.team_experts');

    // =================Sản phẩm===================== //
    // Route::prefix('platform/')->group(function () {
    Route::get('platform/san-pham', function () {
        return view('clients.platform.product');
    })->name('clients.platform.product');

    Route::get('platform/chkcare', function () {
        return view('clients.platform.chkcare_detail');
    })->name('clients.platform.chkcare_detail');
    Route::get('platform/pubcare', function () {
        return view('clients.platform.pubcare');
    })->name('clients.platform.pubcare');
    Route::get('platform/psycare', function () {
        return view('clients.platform.psycare');
    })->name('clients.platform.psycare');
    Route::get('platform/bizcare', function () {
        return view('clients.platform.bizcare');
    })->name('clients.platform.bizcare');

    // ========= Quy trình =============//
    Route::get('layouts/dure-before', function () {
        return view('layouts.procedure.dure_once');
    })->name('layouts.procedure.dure_once');
    Route::get('layouts/dure-prepareing', function () {
        return view('layouts.procedure.dure_twice');
    })->name('layouts.procedure.dure_twice');
    Route::get('layouts/dure-screening', function () {
        return view('layouts.procedure.dure_three');
    })->name('layouts.procedure.dure_three');
    Route::get('layouts/dure-success', function () {
        return view('layouts.procedure.dure_four');
    })->name('layouts.procedure.dure_four');


    // Tài nguyên
    Route::get('tai-nguyen', function () {
        return view('clients.source');
    })->name('clients.source');
    // Tổng quan
    Route::get('tong-quan', function () {
        return view('clients.library.overview');
    })->name('clients.library.overview');
    // Tài liệu
    Route::get('tai-lieu', function () {
        return view('clients.library.docs');
    })->name('clients.library.docs');
    // Video
    Route::get('video', function () {
        return view('clients.library.media');
    })->name('clients.library.media');

    // Tài nguyên
    Route::get('chkcare-price', function () {
        return view('price.chk_price');
    })->name('price.chk_price');
    
});

// ===== Router Admin ===== //
Route::prefix('admin')->middleware('check_admin_role')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    // Page_404
    Route::get('page_error_404', function () {
        return view('admin.page_error_404');
    })->name('page_error_404');

    // ===== Router Post ===== //
    Route::prefix('posts')->group(function () {
        Route::get('bai-viet', [PostController::class, 'index'])->name('posts.index');
    });
    // ===== Router Post Category ===== //
    Route::prefix('cate_post')->group(function () {
        Route::get('danh-muc-bai-viet', [CatePostController::class, 'index'])->name('cate_post.index');
    });

    // ===== Router Users ===== //
    Route::get('users/nguoi-dung', [UserController::class, 'index'])->name('users.index');
});
