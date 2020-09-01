<?php

use Illuminate\Support\Facades\Route;

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

// Trang chủ
Route::get('/category/{id}','productController@product');
Route::get('/detail/{id}','productController@detail');
Route::get('/','homeController@index');
Route::get('/createuser','homeController@createUser');
Route::get('/createuser/login','homeController@getcreateUser');
Route::get('/about','homeController@about');
Route::get('/chat','homeController@chat');
Route::get('/ibuy','homeController@ibuy');
Route::get('/admin/addproduct','adminController@addproduct');
// Trang admin
Route::get('/admin','adminController@index');
Route::get('/admin/table','adminController@table');
Route::get('/admin/page','adminController@page');
Route::get('/admin/product','adminController@product');
Route::get('/admin/gallery','adminController@gallery');
Route::get('/admin/user','adminController@user');
// Route::get('/admin','loginController@index');
Route::get('/admin/login','loginController@checkLogin');
Route::get('/admin/logout','loginController@logout');
// Đăng tin
Route::get('/post','homeController@post');
Route::get('/post/create','homeController@createpost');
Route::get('/post/loc','homeController@filtercity');
