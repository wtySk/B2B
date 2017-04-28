<?php
/**
 * Author: wtySk
 * Date: 2017/3/23 11:21
 */

/**
 * 文章接口路由
 */

$api->version('v1', function ($api) {
    $api->group([
        'prefix' => 'wechat',
        'namespace' => modulesNamespace(__FILE__,'InterfaceImplement')
    ],function ($api){
        //get方式只做测试用 post为接口实现方式
        $api->post('articles','ArticleImplement@getAll');
        $api->post('article','ArticleImplement@getById');
        $api->post('article-hit','ArticleImplement@addHit');
    });
});