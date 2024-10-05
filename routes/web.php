<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\blogsController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;




Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/about", [AboutController::class, 'index'])->name('about');
Route::get("/students", [StudentsController::class, 'index'])->name('students');
Route::get("/blogs", [blogsController::class, 'index'])->name('blogs');
Route::get('/blog/{id}', [blogsController::class, 'show'])->name('blog.show');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');

Route::group(['prefix' => 'account'], function () {

    //Guest Routes
    Route::group(['middleware' => 'guest'], function () {
        Route::get("/register", [AccountController::class, 'registration'])->name('account.registration');
        Route::post("/process-register", [AccountController::class, 'processRegistration'])->name('account.processRegistration');
        Route::get("/login", [AccountController::class, 'login'])->name('account.login');
        Route::post("/authenticate", [AccountController::class, 'authenticate'])->name('account.authenticate');
        Route::get("/forgot-password", [AccountController::class, 'forgotPassword'])->name('account.forgotPassword');
        Route::post("/process-forgot-password", [AccountController::class, 'processForgotPassword'])->name('account.processForgotPassword');
        Route::get("/reset-password/{token}", [AccountController::class, 'resetPassword'])->name('account.processResetPassword');
        Route::post("/reset-password/update", [AccountController::class, 'resetPasswordUpdate'])->name('account.resetPasswordUpdate');
    });


    // Add other routes that require authentication here
    Route::group(['middleware' => ['auth']], function () {
        Route::get("/profile", [AccountController::class, 'profile'])->name('account.profile');
        Route::get("/profile/edu", [AccountController::class, 'profileEdu'])->name('account.profile.edu');
        Route::get("/profile/prefrences", [AccountController::class, 'profilePrefrences'])->name('account.profile.prefrences');
        Route::put("/update-profile", [AccountController::class, 'updateProfile'])->name('account.update-profile');
        Route::put("/update-profile-edu", [AccountController::class, 'updateProfileEdu'])->name('account.update-profile-edu');
        Route::put("/update-profile-prefrences", [AccountController::class, 'updateProfilePrefrences'])->name('account.update-profile-prefrences');
        Route::post("/update-profile-pic", [AccountController::class, 'updateprofilePic'])->name('account.updateprofilepic');
        Route::get("/updloaded-files", [AccountController::class, 'uploadedFiles'])->name('account.profile.uploadedFiles');
        Route::get("/security", [AccountController::class, 'passwordchange'])->name('account.profile.security');
        Route::post("/security/change-password", [AccountController::class, 'security'])->name('account.profile.security.change-password');
        Route::get("/profile/admin", [AccountController::class, 'profileAdmin'])->name('account.profile.admin');
        Route::get("/profile/admin/users", [AccountController::class, 'adminUsersView'])->name('account.profile.admin.users');
        Route::get("/profile/admin/portal", [AccountController::class, 'adminPortalView'])->name('account.profile.admin.portal');
        Route::get("/profile/admin/blogs", [blogsController::class, 'blogsAdmin'])->name('account.profile.admin.blog-edit');
        Route::post('/profile/admin/portal/add-category', [blogsController::class, 'addCategory'])->name('admin.addCategory');
        Route::post('/profile/admin/portal/upload-blog', [blogsController::class, 'uploadBlog'])->name('admin.uploadBlog');
        Route::post('/profile/admin/portal/delete-blog/{id}', [blogsController::class, 'deleteBlog'])->name('admin.deleteBlog');

        Route::post('/profile/admin/portal/add-referral-code', [AccountController::class, 'addReferralCode'])->name('admin.addReferralCode');
        Route::post('/profile/admin/portal/delete-referral-code', [AccountController::class, 'deleteReferralCode'])->name('admin.deleteReferralCode');
        Route::get('/profile/admin/updloaded-files/export-users', [AccountController::class, 'export'])->name('export.users');

        Route::get("/logout", [AccountController::class, 'logout'])->name('account.logout');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
