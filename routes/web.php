<?php

use App\Http\Controllers\CatePostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Catch_;

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
    // Giới thiệu
    Route::get('gioi-thieu', function () {
        return view('clients.about');
    })->name('clients.about');
    // Liên hệ 
    Route::get('lien-he', function () {
        return view('clients.contact');
    })->name('clients.contact');
    // Tuyển dụng
    Route::get('tuyen-dung', function () {
        return view('clients.post.enlist');
    })->name('clients.post.enlist');
    // Thông tin thanh toán
    Route::get('thong-tin-thanh-toan', function () {
        return view('clients.billing_infor');
    })->name('clients.billing_infor');
    // Phần mềm
    Route::get('phan-mem', function () {
        return view('clients.features');
    })->name('clients.features');
    // Bảng giá
    Route::get('bang-gia', function () {
        return view('clients.pricing');
    })->name('clients.pricing');
    // Kiến thức
    Route::get('kien-thuc', function () {
        return view('clients.knowledge');
    })->name('clients.knowledge');
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
Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    // Page_404
    Route::get('page_error_404', function () {
        return view('admin.page_error_404');
    })->name('page_error_404');
    
    // ===== Router Post ===== //
    Route::prefix('posts')->group(function(){
        Route::get('bai-viet', [PostController::class, 'index'])->name('posts.index');
        
    });
    // ===== Router Post Category ===== //
    Route::prefix('cate_post')->group(function(){
        Route::get('danh-muc-bai-viet', [CatePostController::class, 'index'])->name('cate_post.index');
        
    });
});



