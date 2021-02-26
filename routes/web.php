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
    return view('test');

//Route::get('/', function () {
//    return view('test');
});


Route::get('test/index', [
    'uses' => 'TestController@showTestPage',
    'as' => 'test.index'
    ]);

Route::get('example/index', [
    'uses' => 'ExampleController@showIndexPage',
    'as' => 'example.index'
    ]);
