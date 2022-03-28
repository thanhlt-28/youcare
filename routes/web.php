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
Route::prefix('/')->middleware('check_users')->group(function () {
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

        Route::get('san-pham-1', function () {
            return view('clients.platform.prod_1');
        })->name('clients.platform.prod_1');
        Route::get('san-pham-2', function () {
            return view('clients.platform.prod_2');
        })->name('clients.platform.prod_2');
        Route::get('san-pham-3', function () {
            return view('clients.platform.prod_3');
        })->name('clients.platform.prod_3');
        Route::get('san-pham-4', function () {
            return view('clients.platform.prod_4');
        })->name('clients.platform.prod_4');
    // });



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
});
