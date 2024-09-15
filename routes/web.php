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
    return view('index');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/teacher',function(){
    return view('teacher.index');
});
Route::get('/teacher/show',function(){
    return view('teacher.show');
});
Route::get('/post',function(){
    return view('post.index');
});
Route::get('/post/show',function(){
    return view('post.show');
});
Route::get('/streaming',function(){
    return view('streaming.index');
});
Route::get('/streaming/show',function(){
    return view('streaming.show');
});
Route::get('/course',function(){
    return view('course.index');
});
Route::get('/course/show',function(){
    return view('course.show');
});
Route::get('/product',function(){
    return view('product.index');
});
Route::get('/product/show',function(){
    return view('product.show');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/reserve',function(){
    return view('reserve');
});
Route::get('/help',function(){
    return view('help');
});
Route::get('/help-role',function(){
    return view('help-role');
});
Route::get('/help/show',function(){
    return view('help-show');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/login-success',function(){
    return view('login-success');
});
Route::get('/forgot',function(){
    return view('forgot');
});
Route::get('/forgot-2',function(){
    return view('forgot-2');
});
Route::get('/forgot-3',function(){
    return view('forgot-3');
});
Route::get('/forgot-success',function(){
    return view('forgot-success');
});
Route::get('/register',function(){
    return view('register');
});
Route::get('/register-success',function(){
    return view('register-success');
});
Route::get('/member',function(){
    return view('member.index');
});
Route::get('/member/msg-center',function(){
    return view('member.msg-center');
});
Route::get('/member/msg-center/show',function(){
    return view('member.msg-center-show');
});
Route::get('/member/change-password',function(){
    return view('member.change-password');
});
