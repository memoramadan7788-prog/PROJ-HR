<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\InterviewerController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SuperAdmin\OrganizationController;

// الصفحة الرئيسية
Route::get('/', function () {
    return view('auth.login');
});

// مسارات تسجيل الدخول (Login)
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// مسارات إنشاء الحساب (Register)
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// مسارات التحقق من الإيميل (Verify Email)
Route::get('/verify-email', [VerificationController::class, 'show'])->name('verification.notice');
Route::post('/verify-email', [VerificationController::class, 'verify'])->name('verification.verify');

// مسارات استعادة كلمة المرور
Route::get('/reset-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/reset-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.update');

// مسارات وحدة المُحاور (Interviewer Module)
Route::get('/interviewer', [InterviewerController::class, 'index'])->name('interviewer.index');

// -------------------------------------------------------------
// مسارات السوبر أدمن (Super Admin Routes)
// -------------------------------------------------------------
Route::prefix('superadmin')->name('superadmin.')->group(function () {
    
    // صفحة الـ SuperAdmin الرئيسية (/superadmin)
    Route::get('/', [SuperAdminController::class, 'index'])->name('dashboard');
    
    // صفحة الـ Organizations (/superadmin/organizations)
    Route::get('/organizations', [OrganizationController::class, 'index'])->name('organizations.index');

});