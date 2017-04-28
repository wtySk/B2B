<?php
/**
 * Created by PhpStorm.
 * Date: 2017/3/9
 * Time: 15:23
 */
Route::group([
    'prefix'        => 'harmony',
    'namespace' => modulesNamespace(__FILE__),
    'middleware'    => ['web'],
],function ($router){
    $router->get('/ask/{id}','OrderController@ask');
    $router->post('/order','OrderController@orderPost');
});