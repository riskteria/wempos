<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('article/{slug}', 'ArticleController@index');
Route::get('sekolah/{jenjang}','DaftarSekolahController@index');
Route::get('bandingkan', 'BandingkanController@index');
Route::get('event', 'EventController@index');
Route::get('event/{id}', 'EventController@tampil');
Route::get('rekomendasi', 'RekomendasiController@index');
Route::get('profil/{id}', 'ProfilController@index');
ROute::post('pencarian', 'PencarianController@index');

Route::get('tentang','FooterController@tentang');
Route::get('kebijakan','FooterController@kebijakan');
Route::get('syarat','FooterController@syarat');

Route::get('admin', function(){ return view('admin.home'); });

Route::post('BandingProses', 'BandingkanController@banding');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
