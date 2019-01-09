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
// Route::get('/dsnhomhopdong/{id}', 'nhomhdcontroller@edit')->name('dsnhomhopdong.edit');

// Route::put('/dsnhomhopdong/{id}', 'nhomhdcontroller@update')->name('dsnhomhopdong.update');
Route::resource('/dsnhomhopdong', 'nhomhdcontroller');
// Route::get('/danhsachhopdong', 'dshopdongcontroller@index')->name('danhsachhopdong.index');
Route::resource('/danhsachhopdong', 'dshopdongcontroller');
Route::resource('/danhsachnhanvien, nhanvienController');
