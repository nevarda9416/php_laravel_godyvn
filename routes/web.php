<?php

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
    return view('homepage');
});
Route::get('/blog/viet-bai/note', function () {
    return view('blog.note');
});
Route::get('/photo-blog/dang-bai/note', function () {
    return view('blog.photo');
});
Route::get('/hoi-dap', function () {
    return view('question.index');
});
Route::get('/lich-trinh-du-lich', function () {
    return view('schedule.index');
});
