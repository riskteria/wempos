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
Route::get('rekomendasi', 'RekomendasiController@index');
Route::get('profil/{id}', 'ProfilController@index');

Route::get('tentang','FooterController@tentang');
Route::get('kebijakan','FooterController@kebijakan');
Route::get('syarat','FooterController@syarat');

Route::post('BandingProses', 'BandingkanController@banding');