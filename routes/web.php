<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\UserController;
use Illuminate\Http\Controllers\ProductController;
use Illuminate\Http\Controllers\FeedbackController;
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

Route::get('/login', function () {
    return view('master1');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::get('/register', function () {
    return view('register');
});


Route::post('/register' , 'UserController@register');
Route::post('/login' , 'UserController@login');
Route::get('/' , 'ProductController@index');
Route::get('/detail/{id}' , 'ProductController@detail');
Route::get('/search' , 'ProductController@search');
Route::post('/add_to_cart' , 'ProductController@AddToCart');
Route::get('/cartList' , 'ProductController@cartList');
Route::get('removeCart/{id}' , 'ProductController@removeCart');
Route::get('/orderNow' , 'ProductController@orderNow');
Route::post('/orderPlace' , 'ProductController@orderPlace');
Route::get('/myOrders' , 'ProductController@myOrders');
Route::post('/buyNow/{id}' , 'ProductController@buyNow');
Route::post('/orderOne/{id}' , 'ProductController@orderOne');


Route::get('/admin' , 'UserController@adminIndex');
Route::get('/addProduct', function () {
    return view('addProduct');
});
Route::post('/addProduct' , 'ProductController@addProduct');
Route::get('editProduct/{id}' , 'ProductController@editProduct');
Route::post('updateProduct/{id}','ProductController@updateProduct');
Route::get('removeProduct/{id}' , 
	'ProductController@removeProduct');


Route::post('/addFeedback' , 'FeedbackController@addFeedback');
Route::get('/showFeedbacks' , 'FeedbackController@showFeedbacks');
//Route::get('/goToReply' ,'FeedbackController@goToReply');

Route::post('reply/{id}' , 'FeedbackController@answer');
Route::get('/answers' , 'FeedbackController@getAdminAnswer');

Route::get('/gifts' , 'ProductController@showGifts');
Route::post('/replace/{id}' , 'ProductController@replaceGift');

Route::post('/category/{category}' , 
	'ProductController@getByCategory');



