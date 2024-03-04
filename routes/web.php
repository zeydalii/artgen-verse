<?php

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

Route::get('/login', function () {
    return view('users.pages.login');
});

Route::get('/register', function () {
    return view('users.pages.register');
});

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

Route::get('/admin', function () {
    return view('admin.pages.overviews');
});

Route::get('/admin/users', function () {
    return view('admin.pages.users');
});

Route::get('/admin/scores', function () {
    return view('admin.pages.scores');
});