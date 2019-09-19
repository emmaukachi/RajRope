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
Route::get('/home',function(){
	return view('pages.home');
});

Route::get('/services',function(){
	return view('pages.services');
});


Route::get('/contact',function(){
	return view('pages.contact');
});

Route::get('/about',function(){
	return view('pages.about');
});

Route::get('/product',function() {
	return view('pages.product');
	
})->name('my-product');

Route::get('/faq',function(){
	return view('pages.faq');
});

Route::get('/join',function(){
	return view('pages.join');
});




