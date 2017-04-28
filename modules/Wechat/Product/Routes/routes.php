<?php
/**
 * Author: wtySk
 * Date: 2017/2/10 15:01
 */
use Illuminate\Routing\Router;
Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => modulesNamespace(__FILE__),
    'middleware'    => ['web', 'admin','admin.permission:allow,administrator,product'],
], function (Router $router) {
    $router->resources([
        'product'=>'ProductController',
    ]);
    $router->post('product/release', 'ProductController@release');
});