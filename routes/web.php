<?php


use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@viewHome');
Route::get('/register', 'UserController@viewRegister');
Route::post('/registerPost', 'UserController@registerAuth');
Route::get('/login', 'UserController@viewLogin');
Route::post('/loginPost', 'UserController@loginAuth');
Route::get('/logout', 'UserController@logout');
Route::get('/menu', 'HomeController@viewMenu');
Route::get('/search', 'SortController@searchItem');
Route::get('/stationary/{stationary_id}', 'SortController@stationaryItem');
Route::get('/itemDetail/{item_id}', 'DetailController@detail');


Route::group(['middleware' => ['auth', 'role:Admin']], function () {

    Route::get('/addItem', 'AddItemController@view');
    Route::post('/addItemPost', 'AddItemController@addItem');
    Route::get('/editItem/{item_id}', 'AddItemController@edit');
    Route::post('/editItemPost', 'AddItemController@editItem');
    Route::get('/deleteItem/{item_id}', 'AddItemController@deleteItem');
    Route::get('/addStationary', 'StationaryController@addStationary');
    Route::post('/addStationaryPost', 'StationaryController@add');
    Route::get('/editStationary', 'StationaryController@view');
    Route::get('/updateStationary/{stationary_id}', 'StationaryController@updateStationary');
    Route::post('/update', 'StationaryController@update');
    Route::get('/deleteStationary/{stationary_id}', 'StationaryController@delete');
});


Route::group(['middleware' => ['auth', 'role:Member']], function () {

    Route::get('/cart', 'CheckoutController@cart');
    Route::post('/addToCart/{item_id}', 'CheckoutController@addToCart');
    Route::get('/updateCart/{item_id}', 'CheckoutController@updateCart');
    Route::post('/updateCartPost/{item_id}', 'CheckoutController@updatedCart');
    Route::get('/deleteCart/{cart_id}', 'CheckoutController@deleteCart');
    Route::post('/checkout', 'CheckoutController@checkout');
    Route::get('/transactionHistory', 'TransactionController@view');
});
