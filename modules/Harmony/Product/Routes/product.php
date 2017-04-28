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
    $router->get('/detail/{id}','ProductController@productDetail');
	$router->post('/detailPost','ProductController@productDetailPost');
    $router->get('/follow','ProductController@productFollow');
    $router->get('/freedom','ProductController@productFreedom');
    $router->get('/self','ProductController@productSelf');
    $router->post('/listpost','ProductController@productListPost');
    $router->get('/list', 'ProductController@productList');
});