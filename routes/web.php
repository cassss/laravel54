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


//用户模块
//注册页面
Route::get('/register', '\App\Http\Controllers\RegisterController@index');
//注册行为
Route::post('/register', '\App\Http\Controllers\RegisterController@register');
//登陆页面
Route::get('/login', '\App\Http\Controllers\LoginController@index');
//登陆行为
Route::post('/login', '\App\Http\Controllers\LoginController@login');
//登出行为
Route::get('/logout', '\App\Http\Controllers\LoginController@logut');
//个人设置页面
Route::get('/user/me/setting', '\App\Http\Controllers\UserController@setting');
//个人设置操作
Route::post('/user/me/setting', '\App\Http\Controllers\UserController@settingStore');






//文章列表页
Route::get('/posts', '\App\Http\Controllers\PostController@index');
//文章详情页
Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show')->where('post', '[0-9]+');
//创建文章
Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
Route::post('/posts', '\App\Http\Controllers\PostController@store');
//编辑文章
Route::get('/posts/{post}/edit','\App\Http\Controllers\PostController@edit')->where('post', '[0-9]+');
Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update')->where('post', '[0-9]+');
//删除文章
Route::get('/posts/{post}/delete','\App\Http\Controllers\PostController@delete')->where('post', '[0-9]+');
//图片上传
Route::post('/posts/image/upload','\App\Http\Controllers\PostController@imageUpload');
//评论提交
Route::post('/posts/{post}/comment','\App\Http\Controllers\PostController@comment')->where('post', '[0-9]+');

//赞
Route::get('/posts/{post}/zan', '\App\Http\Controllers\PostController@zan');
//取消赞
Route::get('/posts/{post}/unzan', '\App\Http\Controllers\PostController@unzan');

//个人中心
Route::get('/user/{user}', '\App\Http\Controllers\UserController@show');
//
Route::get('/user/{user}/fan', '\App\Http\Controllers\UserController@fan');
Route::get('/user/{user}/unfan', '\App\Http\Controllers\UserController@unfan');
