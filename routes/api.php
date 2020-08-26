<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/news', 'NewController@index');
Route::get('/user', 'UserController@index');
Route::get('/login', 'Login@login');
Route::post('/loginPhone', 'Login@loginPhone');
Route::get('/recruitment', 'Recruitment@index');
Route::post('/addrecruitment', 'Recruitment@addOrEdit');
Route::post('/deleterecruitment', 'Recruitment@delete');
Route::post('/search', 'Recruitment@searchPosition');
Route::get('/category', 'CategoryController@index');
Route::get('/product', 'mProductController@index');
Route::post('/idproduct', 'mProductController@getProduct');
Route::post('/comment', 'mProductController@getComment');
Route::get('/trademark', 'TrademarkController@index');
Route::post('/upload', 'UploadImageController@imageUpload');
Route::post('/insert', 'CommentController@insert');
Route::post('/address', 'AddressController@index');
Route::post('/updateorinsert', 'AddressController@updateAddress');
Route::post('/order', 'OrderController@newOrder');
Route::post('/getorder', 'OrderController@getOrder');
Route::post('/typecategory', 'CategoryController@typeCategory');
Route::post('/updatestatus', 'OrderController@updateStatus');
Route::get('shop','ShopController@getShop');
