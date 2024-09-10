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
Route::get('/course',function(){
    return view('course.index');
});
