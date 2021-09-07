<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  
|--------------------------------------------------------------------------
*/

Auth::routes(); 
Route::get('/', 'HomeController@index'); 

Route::get('/hayvan', 'hayvanListCont@hayvan'); 
Route::post('/hayvan', 'hayvanListCont@tbl_hayvanEkle'); 
Route::post('/hayvanSil', 'hayvanListCont@tbl_hayvanSil'); 
Route::post('/hayvanDuzenle', 'hayvanListCont@tbl_hayvanDuzenle');
Route::post('/gebelikBitir', 'hayvanListCont@gebelikBitir'); 

Route::get('/gelir', 'gelirCont@gelir'); 
Route::post('/gelir', 'gelirCont@donemlikSutEkle'); 
Route::post('/gelirSutSil', 'gelirCont@gelirSutSil'); 
Route::post('/aylikSutToplamiGetir', 'gelirCont@aylikSutToplamiGetir'); 
Route::post('/aylikSutTahsilEt', 'gelirCont@aylikSutTahsilEt'); 

Route::get('/stok', 'stokCont@stok'); 


Route::get('/gider', 'giderCont@gider'); 
Route::post('/giderEkle', 'giderCont@giderEkle'); 

Route::get('/home', 'HomeController@index')->name('home');
