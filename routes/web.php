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
