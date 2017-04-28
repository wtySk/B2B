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

const DOMAIN = 'http://59.110.52.13/';
const NABIANET = 'http://wechat.nabianet.com/';
const JAVAPROVIDER = true;

/*首页*/
Route::get('/', function () {
    return view('welcome');
});
/* 注册登录路由 */
Auth::routes();

/*oauth 管理*/
Route::get('/home', 'HomeController@index');


/*test*/


Route::get('/test/file','TestController@index');
Route::post('/test/file-post','TestController@post');
Route::get('/cache','TestController@ca');
