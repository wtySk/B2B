<?php
/**
 * Author: wtySk
 * Date: 2017/3/13 10:44
 */

/**
 * 首页接口路由
 */


$api->version('v1', function ($api) {
    $api->group([
        'namespace' => modulesNamespace(__FILE__,'InterfaceImplement')
    ],function ($api){
        $api->get('users','IndexImplement@getAll');//http://localhost/api/users
        $api->get('user/{id}','IndexImplement@get');
        $api->post('user/{id}','IndexImplement@update');
    });
});



