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

// ========== Router Clients ============================ //
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

    // =================Sản phẩm========================== //
    // Route::prefix('platform/')->group(function () {
    Route::get('san-pham', function () {
        return view('clients.platform.product');
    })->name('clients.platform.product');

    // Route::get('cong-dong', function () {
    //     return view('clients.about.group');
    // })->name('clients.about.group');


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

    // ========= Quy trình =============================//
    Route::get('danh-cho-giao-vien', function () {
        return view('layouts.procedure.teacher');
    })->name('layouts.procedure.teacher');
    Route::get('danh-cho-cha-me', function () {
        return view('layouts.procedure.parents');
    })->name('layouts.procedure.parents');
    Route::get('danh-cho-hoc-sinh', function () {
        return view('layouts.procedure.students');
    })->name('layouts.procedure.students');
    Route::get('danh-cho-quan-ly', function () {
        return view('layouts.procedure.manager');
    })->name('layouts.procedure.manager');
    Route::get('danh-cho-nha-chuyen-mon', function () {
        return view('layouts.procedure.dure_five');
    })->name('layouts.procedure.dure_five');


    // ====== Tài nguyên ============================ //
    Route::get('tai-nguyen', function () {
        return view('clients.source');
    })->name('clients.source');
    
    // Tài liệu
    Route::get('tai-lieu', function () {
        return view('clients.library.docs');
    })->name('clients.library.docs');
    // Video
    Route::get('video', function () {
        return view('clients.library.media');
    })->name('clients.library.media');

    // Gia
    Route::get('ckcare-price', function () {
        return view('price.ck_price');
    })->name('price.ck_price');



    //CKCare 4.0

    Route::get('ckcare-school', function () {
        return view('layouts.ck_detail.ckcare_school');
    })->name('layouts.ck_detail.ckcare_school');
    Route::get('ckcare-org', function () {
        return view('layouts.ck_detail.ckcare_org');
    })->name('layouts.ck_detail.ckcare_org');

    Route::get('truong-mam-non', function () {
        return view('layouts.ck_detail.ckcare_preschool');
    })->name('layouts.ck_detail.ckcare_preschool');
    Route::get('truong-pho-thong', function () {
        return view('layouts.ck_detail.ckcare_highschool');
    })->name('layouts.ck_detail.ckcare_highschool');

    Route::get('asq-3', function () {
        return view('clients.ckcare.asq3');
    })->name('clients.ckcare.asq3');
    Route::get('cbcl', function () {
        return view('clients.ckcare.cbcl');
    })->name('clients.ckcare.cbcl');
    Route::get('adhd', function () {
        return view('clients.ckcare.adhd');
    })->name('clients.ckcare.adhd');
    Route::get('m-chat', function () {
        return view('clients.ckcare.mchat');
    })->name('clients.ckcare.mchat');

    // ============================================================== //
    // Chuyên gia - chi tiết
    Route::get('thay-thuoc-uu-tu-nguyen-van-dung', function () {
        return view('layouts.profile.bsdung');
    })->name('layouts.profile.bsdung');

    Route::get('tien-si-pham-van-tu', function () {
        return view('layouts.profile.tspvtu');
    })->name('layouts.profile.tspvtu');

    Route::get('tien-si-nguyen-thi-tham', function () {
        return view('layouts.profile.tsnttham');
    })->name('layouts.profile.tsnttham');

    Route::get('tien-si-nguyen-thi-mai-huong', function () {
        return view('layouts.profile.tsntmhuong');
    })->name('layouts.profile.tsntmhuong');

    Route::get('thac-si-nguyen-thi-thanh-van', function () {
        return view('layouts.profile.thsnttvan');
    })->name('layouts.profile.thsnttvan');

    Route::get('thac-si-nguyen-thi-thuy-hang', function () {
        return view('layouts.profile.thsntthang');
    })->name('layouts.profile.thsntthang');

    Route::get('thac-si-nguyen-hien-minh', function () {
        return view('layouts.profile.thsnhminh');
    })->name('layouts.profile.thsnhminh');

    Route::get('thac-si-le-the-hanh', function () {
        return view('layouts.profile.thslthanh');
    })->name('layouts.profile.thslthanh');

    Route::get('thac-si-dang-minh-khue', function () {
        return view('layouts.profile.thsdmkhue');
    })->name('layouts.profile.thsdmkhue');
});

// ============== Router Admin ================================== //
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
