<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// الصفحة الرئيسية
Route::get('/', function () {
    return view('index');
});

// صفحة تسجيل الدخول (عرض القالب عبر الكنترولر)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// معالجة بيانات تسجيل الدخول (POST عبر الكنترولر)
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// تسجيل الخروج
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// صفحة إنشاء حساب جديد (عرض القالب)
Route::get('/register', function () {
    return view('auth.register'); 
})->name('register');

// معالجة بيانات إنشاء الحساب (POST)
Route::post('/register', function (Request $request) {
    return "Register done successfully for email: " . $request->input('email');
})->name('register.submit');

// صفحة التحقق من البريد الإلكتروني (Check Inbox)
Route::get('/check-inbox', function () {
    return view('auth.verify');
})->name('verification.notice');

// صفحة إعادة تعيين كلمة المرور الجديدة (عرض القالب)
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('password.reset');

// معالجة حفظ كلمة المرور الجديدة (POST)
Route::post('/reset-password', function (Request $request) {
    return redirect()->route('login')->with('status', 'Password reset successfully!');
})->name('password.update');