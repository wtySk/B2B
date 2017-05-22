<?php
/**
 * Author: wtySk
 * Date: 2017/2/24 14:32
 */
use Illuminate\Routing\Router;
Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => modulesNamespace(__FILE__),
    'middleware'    => ['web', 'admin','admin.permission:allow,article'],
], function (Router $router) {
    $router->resources([
        'article'=>'ArticleAdminController',
    ]);
    $router->post('article/release', 'ArticleAdminController@release');
});


Route::group([
    'namespace'     => modulesNamespace(__FILE__)
],function(Router $router){
    $router->get('{username}/articles','ArticleController@index');
});