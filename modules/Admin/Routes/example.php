<?php
/**
 * Author: wtySk
 * Date: 2017/2/9 15:12
 */
use Illuminate\Routing\Router;
Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => modulesNamespace(__FILE__),
], function (Router $router) {

});