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

Route::get('testmodel', function () {
    $q = App\Post::all();
    return $q;
});
Route::get('produk', function () {
    $a = App\produk::all();
    return $a;
});
Route::get('pengguna', function () {
    $x = App\pengguna::all();
    return $x;
});
Route::get('pengaturan', function () {
    $k = App\pengaturan::all();
    return $k;
});

Route::get('semuanya', function () {
    $t = App\produk::all();
    $u = App\pengguna::all();
    $i = App\pengaturan::all();
    return $t.$u.$i;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
