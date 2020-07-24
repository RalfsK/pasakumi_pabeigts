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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show', 'create','store']]);
});

Route::resource('/pasakumi','pasakumuController',['except'=>['create','show','update']])->middleware('can:see-events');
Route::get('/pasakumi/create', 'pasakumuController@create')->name('pasakumi');
Route::post('/pasakumi/apstiprinat', 'pasakumuController@apstiprinat')->name('pasakumi.apstiprinat');
Route::POST('/pasakumi/edit', 'pasakumuController@update');
