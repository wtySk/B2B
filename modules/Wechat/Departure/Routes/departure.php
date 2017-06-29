<?php
/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 26/06/2017
 * Time: 15:16
 */

use Illuminate\Routing\Router;
Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => modulesNamespace(__FILE__),
    'middleware'    => ['web', 'admin','admin.permission:allow,departure'],
], function (Router $router) {

    $router->resources([
        'departure'=>'DepartureController',
    ]);

});
