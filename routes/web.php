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
Route::get('/','Controller@index');
Route::get('/login', function () {
    return view('loginregis/login');
});
Route::get('/register',function() {
  return view('/loginregis/register');
});
Route::get('/beranda',function() {
  return view('penari/dashboardPanel');
});
