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
    return view('admin.index');
});
Route::get('/admin/login', function (){
    return view('admin.login');
});
Route::get('/admin/register', function (){
    return view('admin.register');
});
Route::get('/admin/forgot', function (){
    return view('admin.forgot');
});
Route::get('/admin/color', function (){
    return view('admin.utilities-color');
});
Route::get('/admin/other', function (){
    return view('admin.utilities-other');
});
Route::get('/admin/border', function (){
    return view('admin.utilities-border');
});
Route::get('/admin/animation', function (){
    return view('admin.utilities-animation');
});
Route::get('/admin/blank', function (){
    return view('admin.blank');
});
Route::get('/admin/404', function (){
    return view('admin.404');
});
Route::get('/admin/tables', function (){
    return view('admin.tables');
});
Route::get('/admin/charts', function (){
    return view('admin.charts');
});
Route::get('/admin/buttons', function (){
    return view('admin.buttons');
});
Route::get('/admin/cards', function (){
    return view('admin.cards');
});

