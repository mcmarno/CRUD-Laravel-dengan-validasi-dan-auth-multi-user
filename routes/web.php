<?php

Route::get('/', function () {
	return view('welcome');
});
Route::group(['middleware'], function()    
{
	Route::auth();
	Route::get('/home', 'HomeController@index')->name('home');
	// Authentication Routes...
	//$this->get('login', 'Auth\AuthController@showLoginForm');
	//$this->post('login', 'Auth\AuthController@login');

	Route::get('/', array('as'=>'admin', 'uses'=> 'AdminController@index'));
	//$this->get('logout', 'Auth\AuthController@logout');
});
Route::group(['middleware' => ['auth','level:1']], function() {
//Route::group(['middleware'=> ['auth', 'level:1']], function() {
	Route::get('/prodi',array('as'=>'prodi', 'uses'=> 'Prodi\ProdiController@index'));
	Route::get('/prodi/tambah', array('as'=>'prodi.tambah', 'uses' => 'Prodi\ProdiController@tambah'));
	Route::post('/prodi/create', array('as'=>'prodi.create', 'uses' => 'Prodi\ProdiController@create'));
	Route::get('/prodi/{id}/edit', array('as'=>'prodi.create', 'uses' => 'Prodi\ProdiController@create'));
	Route::put('/prodi/{id}/simpanedit', array('as'=>'prodi.simpanEdit', 'uses' => 'Prodi\ProdiController@simpanEdit'));
	Route::get('/prodi/{id}/hapus', array('as'=>'prodi.hapus','uses'=> 'Prodi\ProdiController@hapus'));
});