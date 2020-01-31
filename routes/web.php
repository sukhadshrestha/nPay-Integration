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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payment', ['as' => 'pay', 'uses'=> 'PayController@payment']);


Route::get('form', ['as' => 'user_form', 'uses' => 'FormController@index']);
Route::post('form', ['as' => 'user_form', 'uses' => 'FormController@storeForm']);

Route::get('/getPaymentResponse', ['as' => 'payment', 'uses'=>'APIController@index']);