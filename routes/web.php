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
    return view('welcome');
});
// $router->group(['middleware'=>['auth'], 'prefix'=> 'admin'], function($router)
// {
    Route::resource('/dsnhomhopdong', 'nhomhdcontroller');
    Route::resource('/dsphanquyen', 'phanquyenController');
    Route::resource('/danhsachhopdong', 'dshopdongcontroller');
    Route::resource('/danhsachnhanvien', 'nhanvienController');
    Route::resource('/danhsachdulieu','datainfoController');
    Route::resource('/datainfo','datainfoController');
    Route::resource('/newtest','newtestController');
// });
Auth::routes();
Route::get('/', 'frontendController@index')->name('frontend.home');
Route::get('/input', 'frontendController@create')->name('frontend.create');
