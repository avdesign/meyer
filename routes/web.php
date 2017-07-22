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

Auth::routes();


/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'Site\HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Routes cart
|--------------------------------------------------------------------------
*/

Route::resource('carrinho', 'Site\CartController');
Route::get('ajax/cart/info', 'Site\CartController@cartInfo')->name('cart.info');
Route::get('ajax/cart/popup', 'Site\CartController@cartPopup')->name('cart.popup');

Route::get('checkout', 'Site\CheckoutController@cartInfo')->name('checkout');



Route::get('product/quickview/{id}', 'Site\ProductController@quickview');
Route::post('product/quickview/add/cart', 'Site\ProductController@quickAddCart')->name('quickview.add');

Route::get('produto/detalhes/{id}', 'Site\ProductController@index');
Route::post('product/{id}/color', 'Site\ProductController@color');

Route::resource('product/{id}/review', 'Site\ProductReviewControlle');



//Route::resource('product/{id}related', 'Site\RelatedProduct'); // não fiz ainda o bd
//Route::resource('product/file/upload', 'Site\ProductFileUploadControlle');


Route::get('categoria/{id}', 'Site\CategoryController@index');
Route::post('categoria/{id}', 'Site\CategoryController@filter');


Route::resource('newsletter', 'Site\NewsletterController');





