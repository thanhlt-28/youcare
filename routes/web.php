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


// Route::view('login', 'auth.login')->name('login');
// Route::post('login', [UserController::class, 'postLogin'])->name('auth.postLogin');
// Route::any('logout', function () {
//     Auth::logout();
//     return redirect(route('login'));
// })->name('logout');

// Route::view('register', 'auth.register')->name('register');
// Route::post('register', [RegisterController::class, 'postRegister'])->name('auth.postRegister');

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
    Route::get('san-pham', function () {
        return view('clients.platform.product');
    })->name('clients.platform.product');

    
    Route::get('ckcare', function () {
        return view('clients.platform.ckcare_detail');
    })->name('clients.platform.ckcare_detail');
    Route::get('pubcare', function () {
        return view('clients.platform.pubcare');
    })->name('clients.platform.pubcare');
    Route::get('psycare', function () {
        return view('clients.platform.psycare');
    })->name('clients.platform.psycare');
    Route::get('bizcare', function () {
        return view('clients.platform.bizcare');
    })->name('clients.platform.bizcare');

    // ========= Quy trình =============//
    Route::get('quy-trinh-giao-vien', function () {
        return view('layouts.procedure.dure_once');
    })->name('layouts.procedure.dure_once');
    Route::get('quy-trinh-phu-huynh', function () {
        return view('layouts.procedure.dure_twice');
    })->name('layouts.procedure.dure_twice');
    Route::get('quy-trinh-hoc-sinh', function () {
        return view('layouts.procedure.dure_three');
    })->name('layouts.procedure.dure_three');
    Route::get('quy-trinh-nha-quan-ly', function () {
        return view('layouts.procedure.dure_four');
    })->name('layouts.procedure.dure_four');
    Route::get('quy-trinh-nha-chuyen-mon', function () {
        return view('layouts.procedure.dure_five');
    })->name('layouts.procedure.dure_five');


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
    Route::get('ckcare-price', function () {
        return view('price.ck_price');
    })->name('price.ck_price');
    
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
