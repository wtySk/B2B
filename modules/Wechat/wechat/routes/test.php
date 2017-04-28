<?php
/**
 * Author: wtySk
 * Date: 2017/3/28 17:03
 */

Route::group([
    'prefix' => 'wechat',
    'namespace' => modulesNamespace(__FILE__),
    'middleware' =>'wechat.oauth',
],function ($router){
    //---------- 首页 ----------//
    $router->get('/user', 'TestController@index');
});