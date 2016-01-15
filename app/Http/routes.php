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

Route::get('dashboard/admin', 'DashboardController@index');

Route::get('dashboard/sekolah', 'SekolahController@index');

Route::get('dashboard/sekolah/{parameter}', 'SekolahController@parameter');
Route::post('dashboard/sekolah/{parameter}', 'SekolahController@parameter');

Route::get('dashboard/sekolah/{parameter}/{id}', 'SekolahController@parameter');
Route::post('dashboard/sekolah/{parameter}/{id}', 'SekolahController@parameter');

Route::post('BandingProses', 'BandingkanController@banding');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Bagian Admin
Route::get('dashboard/admin/{count}', 'DashboardController@adminview');
Route::post('dashboard/admin/{count}', 'DashboardController@adminview');

Route::get('dashboard/admin/{count}/{id}', 'DashboardController@adminview');
Route::post('dashboard/admin/{count}/{id}', 'DashboardController@adminview');

Route::get('admindelete/{tipe}/{id}', 'DashboardController@delete');

Route::get('dashboard/organisasi', 'OrganisasiController@index');

Route::get('dashboard/organisasi/{parameter}', 'OrganisasiController@parameter');
Route::post('dashboard/organisasi/{parameter}', 'OrganisasiController@parameter');

Route::get('dashboard/organisasi/{parameter}/{id}', 'OrganisasiController@parameter');
Route::post('dashboard/organisasi/{parameter}/{id}', 'OrganisasiController@parameter');
