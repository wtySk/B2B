<?php

Route::group([
    'prefix'        => 'harmony',
    'namespace' => modulesNamespace(__FILE__),
    'middleware'    => ['web'],
],function ($router){
	$router->post('/login','LoginController@loginApi');
	$router->get('/quit','LoginController@quitLogin');
	$router->get('/log','LoginController@login');

});