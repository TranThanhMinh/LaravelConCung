<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Http\Resources\User as UserResource;

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

Route::get('/','Profile@index');

Route::get('register', function () {
    return view('register',['title'=>'Đăng ký']);

});

Route::get('news', function () {
    //return view('register',['title'=>'Đăng ký']);
    return view('news',['title'=>'Tin tức']);
});

Route::get('main', function () {
    //return view('register',['title'=>'Đăng ký']);
    return view('main',['title'=>'Tin tức']);
});

Route::get('trangchu', function () {
    //return view('register',['title'=>'Đăng ký']);
    return view('trangchu',['title'=>'Tin tức']);
});

Route::get('user.html', function () {
    //return view('register',['title'=>'Đăng ký']);
    return view('infouser',['title'=>'Tài khoản']);
});

Route::get('/pagination','Information@getData');

Route::post('pagination/fetch','Information@fetch')->name('pagination.fetch');


Route::post('profile','Profile@login');

Route::get('home','HomeController@getData');

Route::get('detail/{id}','DetailProduct@toDetailProduct');

Route::post('adduser','Profile@addUser');

Route::get('cart','CartController@getListCart');

Route::post('cart/fetch','CartController@fetch')->name('cart.fetch');

Route::get('/json', function () {
    $user = User::all();
    return new UserResource($user);
});

Route::get('recruitment','Recruitment@recruitment');
Route::get('upload','UploadImageController@index');
Route::post('image-upload', 'UploadImageController@imageUploadPost')->name('image.upload.post');



