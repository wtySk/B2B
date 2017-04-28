<?php

Route::group([
    'prefix'        => 'harmony',
    'namespace' => modulesNamespace(__FILE__),
    'middleware'    => ['web'],
],function ($router){
	$router->get('/visa','VisaController@index');

});