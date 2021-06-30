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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('message', function () {
//     echo 'welcome to laravel';
// });

// Route::get('Articale/{id}', function ($id) {
//     echo 'Articale content ........' .$id;
// });



// Route::get('message/{name}', function ($name) {
//     echo 'welcome........' .$name;
// });



// Route::get('message/{name?}', function ($name) {
//     echo 'welcome........' .$name;
// });where('name','[a-z]+');

// Route::get('Articale/{id?}', function ($i = null) {
//     echo 'Articale content ........' .$id;
// })->where('id','[0-9]+');

// Route::get('Register', function () {
//     return view('register');
// });

// Route::get('Call','testController@Message') ;



Route::get('Call','testController@Message') ;
Route::get('Register','testController@register');
Route::get('Call','testController@Message');
Route::get('student','testController@studentdata');
// Route::post('submitform','testController@HandelForm') ;
// Route::post('submitform','testController@doRegister');
// Route::resource('user','userController');
// user >> display (index) GET
// user / create (create)
// user >>  (Store) POST
//user/{id}/edit >> fetch single data
// user/destroy   >>> (delete)


// Route::get('message/{name?}', function ($name) {
//     echo 'welcome........' .$name;
// });where('name','[a-z]+');

Route::get('method','testController@filterUrl');



# CURD 
Route::get('Register','testController@register');

Route::post('submitform','testController@doRegister');

Route::get('display','testController@display');

Route::get('delete/{id}','testController@delete');

Route::get('productDetails/{id}','testController@show');

Route::post('update','testController@update');

Route::get('printMessage','userController@printMessage');


Route::resource('user','userController');
Route::get('Login','userController@login');

Route::post('doLogin','userController@logicLogin');


Route::get('Logout','userController@logout');



