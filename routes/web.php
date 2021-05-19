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
use App\TheLoai;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('admin', 'AdminController');
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'theloai'],function(){
        //admin/theloai/danh sach
        Route::get('danhsach','TheLoaiController@getDanhSach')->name('listTheloai');

        Route::get('sua','TheLoaiController@getSua')->name('editTheloai');

        Route::get('them','TheLoaiController@getThem')->name('addTheloai');

        Route::post('them','TheLoaiController@postThem')->name('postTheloai');
    });
    Route::group(['prefix'=>'loaitin'],function(){
        //admin/loaitin/them
        Route::get('danhsach','TheLoaiController@getDanhSach');

        Route::get('sua','TheLoaiController@getSua');

        Route::get('them','TheLoaiController@getThem');
    });
    Route::group(['prefix'=>'tintuc'],function(){
        //admin/tintuc/them
        Route::get('danhsach','TheLoaiController@getDanhSach');

        Route::get('sua','TheLoaiController@getSua');

        Route::get('them','TheLoaiController@getThem');
    });



});