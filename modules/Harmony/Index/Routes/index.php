<?php
/**
 * Author: wtySk
 * Date: 2017/3/7 14:53
 */

//首页路由

Route::group([
    'prefix'        => 'harmony',
    'namespace' => modulesNamespace(__FILE__),
    'middleware'    => ['web'],
],function ($router){
    //---------- 首页 ----------//
    $router->post('/homePost','IndexController@brandPost');
    $router->post('/pagePost','IndexController@pagePost');
    $router->resources(['/home'=>'IndexController']);
    $router->any('/captcha-test','IndexController@getCaptcha');
});





