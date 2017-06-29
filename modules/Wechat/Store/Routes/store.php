<?php
/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 16/06/2017
 * Time: 15:30
 */

use Illuminate\Routing\Router;
Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => modulesNamespace(__FILE__),
    'middleware'    => ['web', 'admin','admin.permission:allow,store'],
], function (Router $router) {

    $router->resources([
        'store'=>'StoreController',
    ]);

});