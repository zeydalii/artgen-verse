<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('users.main');
});

Route::get('/login', [UserLoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserLoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [UserLoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [UserRegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [UserRegisterController::class, 'store'])->middleware('guest');

Route::get('/area-tantangan', function () {
    return view('users.pages.area-tantangan');
});

// FIRST TEST

Route::get('/first-test/area-1', function () {
    return view('users.pages.first-test.area-1');
});

Route::get('/first-test/area-2', function () {
    return view('users.pages.first-test.area-2');
});

Route::get('/first-test/area-3', function () {
    return view('users.pages.first-test.area-3');
});

Route::get('/first-test/result', function () {
    return view('users.pages.first-test.result');
});

// LAST TEST

Route::get('/last-test/area-1', function () {
    return view('users.pages.last-test.area-1');
});

Route::get('/last-test/area-2', function () {
    return view('users.pages.last-test.area-2');
});

Route::get('/last-test/area-3', function () {
    return view('users.pages.last-test.area-3');
});

Route::get('/last-test/result', function () {
    return view('users.pages.last-test.result');
});

Route::get('/timeline', function () {
    return view('users.pages.timeline');
});

Route::get('/aliran/neoklasik', function () {
    return view('users.pages.aliran.neoklasik');
});

Route::get('/aliran/romantisme', function () {
    return view('users.pages.aliran.romantisme');
});

Route::get('/aliran/realisme', function () {
    return view('users.pages.aliran.realisme');
});

Route::get('/aliran/naturalisme', function () {
    return view('users.pages.aliran.naturalisme');
});

Route::get('/aliran/ekspresionisme', function () {
    return view('users.pages.aliran.ekspresionisme');
});

Route::get('/aliran/impresionisme', function () {
    return view('users.pages.aliran.impresionisme');
});

Route::get('/aliran/surealisme', function () {
    return view('users.pages.aliran.surealisme');
});

Route::get('/aliran/kubisme', function () {
    return view('users.pages.aliran.kubisme');
});

Route::get('/aliran/abstrak-ekspresionisme', function () {
    return view('users.pages.aliran.abstrak-ekspresionisme');
});


// ADMINISTRATOR

Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('login-admin')->middleware('guest');
Route::post('/admin/login', [AdminLoginController::class, 'authenticate'])->middleware('guest');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->middleware(['auth', 'admin']);

Route::get('/admin/register', [AdminRegisterController::class, 'index'])->name('register-admin')->middleware('guest');
Route::post('/admin/register', [AdminRegisterController::class, 'store'])->middleware('guest');

Route::get('/admin', function () {
    return view('admin.pages.overviews');
})->middleware(['auth', 'admin']);

Route::get('/admin/admins', [AdminController::class, 'index'])->middleware(['auth', 'admin']);
Route::post('/admin/admins', [AdminController::class, 'store'])->middleware(['auth', 'admin']);
Route::put('/admin/admins/{id}', [AdminController::class, 'update'])->middleware(['auth', 'admin']);
Route::delete('/admin/admins/{id}', [AdminController::class, 'destroy'])->middleware(['auth', 'admin']);

Route::get('/admin/users', [UserController::class, 'index'])->middleware(['auth', 'admin']);
Route::post('/admin/users', [UserController::class, 'store'])->middleware(['auth', 'admin']);
Route::put('/admin/users/{id}', [UserController::class, 'update'])->middleware(['auth', 'admin']);
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->middleware(['auth', 'admin']);

Route::get('/admin/scores', function () {
    return view('admin.pages.scores');
});