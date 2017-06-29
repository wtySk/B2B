<?php
/**
 * Author: wtySk
 * Date: 2017/5/10 14:12
 */
use Illuminate\Routing\Router;
Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => modulesNamespace(__FILE__),
    'middleware'    => ['web', 'admin','admin.permission:allow,store'],
], function (Router $router) {

    $router->get('service/basic','ServiceAdminController@basic');

    $router->resources([
        'service/article'=>'ServiceAdminController',
    ]);

});