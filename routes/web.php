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

Route::get('dieu-khoan-su-dung', function () {
    return view('clients.police');
})->name('clients.police');

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


    Route::get('pubcare', function () {
        return view('clients.platform.pubcare');
    })->name('clients.platform.pubcare');
    Route::get('psycare', function () {
        return view('clients.platform.psycare');
    })->name('clients.platform.psycare');
    Route::get('bizcare', function () {
        return view('clients.platform.bizcare');
    })->name('clients.platform.bizcare');

    Route::get('jobcare', function () {
        return view('clients.platform.jobcare');
    })->name('clients.platform.jobcare');

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
        return view('.dure_five');
    })->name('.dure_five');

    Route::get('hanh-trinh-1', function () {
        return view('layouts.procedure.set__once');
    })->name('layouts.procedure.set__once');
    Route::get('hanh-trinh-2', function () {
        return view('layouts.procedure.set__twice');
    })->name('layouts.procedure.set__twice');


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
    Route::get('ckcare', function () {
        return view('layouts.ck_detail.ckcare_detail');
    })->name('layouts.ck_detail.ckcare_detail');

    // CKCare School
    Route::get('ckcare-school', function () {
        return view('layouts.ck_detail.ckcare_school');
    })->name('layouts.ck_detail.ckcare_school');

    // CKCare tổ chức
    Route::get('ckcare-org', function () {
        return view('layouts.ck_detail.ckcare_org');
    })->name('layouts.ck_detail.ckcare_org');

    // CKCare cá nhân 
    Route::get('ckcare-person', function () {
        return view('layouts.ck_detail.ckcare_person');
    })->name('layouts.ck_detail.ckcare_person');
    // CKCare mầm non
    Route::get('truong-mam-non', function () {
        return view('layouts.ck_detail.ckcare_preschool');
    })->name('layouts.ck_detail.ckcare_preschool');

    // CKCare phổ thông
    Route::get('truong-pho-thong', function () {
        return view('layouts.ck_detail.ckcare_highschool');
    })->name('layouts.ck_detail.ckcare_highschool');

    // Bộ công cụ
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


    // 4 Giải pháp ckcare
    Route::get('sang-loc-theo-doi', function () {
        return view('clients.ckcare_motion.1-sl&td');
    })->name('clients.ckcare_motion.1-sl&td');
    Route::get('danh-gia-chuyen-sau', function () {
        return view('clients.ckcare_motion.2-dgcs');
    })->name('clients.ckcare_motion.2-dgcs');
    Route::get('can-thiep-tri-lieu', function () {
        return view('clients.ckcare_motion.3-ct&tl');
    })->name('clients.ckcare_motion.3-ct&tl');
    Route::get('ho-tro-dong-hanh', function () {
        return view('clients.ckcare_motion.4-ht&dh');
    })->name('clients.ckcare_motion.4-ht&dh');

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

    Route::get('tien-si-nguyen-minh-phuong', function () {
        return view('layouts.profile.tsphuong');
    })->name('layouts.profile.tsphuong');

    Route::get('thac-si-hoang-le-thuy', function () {
        return view('layouts.profile.thsthuy');
    })->name('layouts.profile.thsthuy');

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

    Route::get('chuyen-gia-truong-hoang-mai', function () {
        return view('layouts.profile.thmai');
    })->name('layouts.profile.thmai');
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
