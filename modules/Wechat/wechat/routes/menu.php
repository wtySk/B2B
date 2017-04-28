<?php
/**
 * Author: wtySk
 * Date: 2017/3/28 16:27
 */

Route::group([
    'namespace' => modulesNamespace(__FILE__),
],function ($router){
    $router->get('/menu','MenuController@menu');
    $router->get('/menu/all','MenuController@menuAll');
});