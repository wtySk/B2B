<?php

/**
 * Author: wtySk
 * Date: 2016/11/25 19:04
 */
namespace Libs\Pipe;

use Route;

/**
 * 自定义注册路由
 * @package Libs\Pipe
 */
class RoutePipe
{

    /**
     * @param $url
     * @param $action
     * @param array $options
     */
    public static function get($url, $action, array $options = [])
    {
        list($project, $namespace, $controller) = explode('.', $action);
        if (count(explode('.', $url)) == 1) {
            Route::get('/' . $url, ['uses' => 'Modules\\' . $project . '\\' . $namespace . '\\Controllers\\' . $controller, 'as' => $url, 'prefix' => isset($options['prefix']) ? $options['prefix'] : null, 'relate' => isset($options['relate']) ? $options['relate'] : null]);
        } else {
            list($first, $last) = explode('.', $url);
            Route::get('/' . $first . '/' . $last, ['uses' => '\\Modules\\' . $project . '\\' . $namespace . '\\Controllers\\' . $controller, 'as' => $url, 'prefix' => isset($options['prefix']) ? $options['prefix'] : null, 'relate' => isset($options['relate']) ? $options['relate'] : null]);
        }
    }

    /**
     * @param $url
     * @param $action
     * @param array $options
     */
    public static function post($url, $action, array $options = [])
    {
        list($project, $namespace, $controller) = explode('.', $action);
        if (count(explode('.', $url)) == 1) {
            Route::post('/' . $url, ['uses' => '\\Modules\\' . $project . '\\' . $namespace . '\\Controllers\\' . $controller, 'as' => $url, 'prefix' => isset($options['prefix']) ? $options['prefix'] : null, 'relate' => isset($options['relate']) ? $options['relate'] : null]);
        } else {
            list($first, $last) = explode('.', $url);
            Route::post('/' . $first . '/' . $last, ['uses' => '\\Modules\\' . $project . '\\' . $namespace . '\\Controllers\\' . $controller, 'as' => $url, 'prefix' => isset($options['prefix']) ? $options['prefix'] : null, 'relate' => isset($options['relate']) ? $options['relate'] : null]);
        }
    }

    /**
     * @param $url
     * @param $action
     * @param string $relate
     * @param array $options
     */
    public static function resource($url, $action, $relate = 'null', array $options = [])
    {
        list($project, $namespace, $controller) = explode('.', $action);
        Route::resource($url, '\\Modules\\' . $project . '\\' . $namespace . '\\Controllers\\' . $controller, $options);
    }
}