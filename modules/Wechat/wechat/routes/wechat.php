<?php
/**
 * Author: wtySk
 * Date: 2017/3/28 16:15
 */

Route::group([
    'namespace' => modulesNamespace(__FILE__),
],function ($router){
    //---------- 首页 ----------//
    $router->get('/wechat_server', 'WeChatController@serve');
    $router->post('/wechat_server', 'WeChatController@serve');
    $router->put('/wechat_server', 'WeChatController@serve');
    $router->delete('/wechat_server', 'WeChatController@serve');
});
