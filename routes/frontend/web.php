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



Auth::routes();

Route::get('/home', 'Frontend\HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Routes Frontend
|--------------------------------------------------------------------------
*/
Route::get('/', 'Frontend\HomeController@index')->name('frontend.home');
/*
|--------------------------------------------------------------------------
| Routes cart
|--------------------------------------------------------------------------
*/
Route::resource('carrinho', 'Frontend\CartController');
Route::get('ajax/cart/info', 'Frontend\CartController@cartInfo')->name('cart.info');
Route::get('ajax/cart/popup', 'Frontend\CartController@cartPopup')->name('cart.popup');
Route::get('checkout', 'Frontend\CheckoutController@cartInfo')->name('checkout');
Route::get('product/quickview/{id}', 'Frontend\ProductController@quickview');
Route::post('product/quickview/add/cart', 'Frontend\ProductController@quickAddCart')->name('quickview.add');
Route::get('produto/detalhes/{id}', 'Frontend\ProductController@index');
Route::post('product/{id}/color', 'Frontend\ProductController@color');
Route::resource('product/{id}/review', 'Frontend\ProductReviewControlle');
//Route::resource('product/{id}related', 'Frontend\RelatedProduct'); // não fiz ainda o bd
//Route::resource('product/file/upload', 'Frontend\ProductFileUploadControlle');
Route::get('categoria/{id}', 'Frontend\CategoryController@index');
Route::post('categoria/{id}', 'Frontend\CategoryController@filter');
Route::resource('newsletter', 'Frontend\NewsletterController');